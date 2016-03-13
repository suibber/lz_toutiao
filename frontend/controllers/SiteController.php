<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use common\BaseController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Article;
use common\models\ConfigInfo;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $page =  BaseController::processPaging();
        $articles = Article::getNewsArticles($page);
        $scroll_imgs = ConfigInfo::findAll(['type' => 1]);
        $head_news = ConfigInfo::findOne(['type' => 2]);
        $total_page = Article::getNewsArticlesTotlePage();
        return $this->renderPartial('index',[
            'articles' => $articles,
            'scroll_imgs' => $scroll_imgs,
            'head_news' => $head_news,
            'total_page' => $total_page,
        ]);
    }

    public function actionDetail($id = 0)
    {
        $article = Article::findOne(['id' => $id]);
        return $this->renderPartial('detail',[
            'article' => $article,
        ]);
    }

    public function actionGetArticles($model, $current_id=0)
    {
        $articles = Article::find()
            ->where(['model' => $model])
            ->all();
        return $articles;
    }

    public function actionFun()
    {
        $page =  BaseController::processPaging();
        $articles = Article::getFunArticles($page);
        $total_page = Article::getFunArticlesTotlePage();
        return $this->renderPartial('fun',[
            'articles' => $articles,
            'total_page' => $total_page,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /*************************************/
    public function time_tran($the_time) {  
        $now_time = date("Y-m-d H:i:s", time());  
        //echo $now_time;  
        $now_time = strtotime($now_time);  
        $show_time = strtotime($the_time);  
        $dur = $now_time - $show_time;  
        if ($dur < 0) {  
            return $the_time;  
        } else {  
            if ($dur < 60) {  
                return $dur . '秒前';  
            } else {  
                if ($dur < 3600) {  
                    return floor($dur / 60) . '分钟前';  
                } else {  
                    if ($dur < 86400) {  
                        return floor($dur / 3600) . '小时前';  
                    } else {  
                        if ($dur < 259200) {//3天内  
                            return floor($dur / 86400) . '天前';  
                        } else {  
                            return $the_time;  
                        }  
                    }  
                }  
            }  
        }  
    }
}
