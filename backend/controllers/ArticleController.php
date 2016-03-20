<?php

namespace backend\controllers;

use Yii;
use common\models\Article;
use common\models\ArticleSearch;
use backend\controllers\BackendController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends BackendController
{

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();
        $data = Yii::$app->request->post();
        if($data){
            $data['Article']['detail'] = isset($data['content2']) ? $data['content2'] : '';
            // 上传图片
            if( $_FILES['Article']['size'] > 0 ){
                $files = $this->saveImg( $_FILES['Article']);
                if( is_array($files) ){
                    if( count( $files ) == 3 ){
                        $data['Article']['img'] = $files[0];
                        $data['Article']['img2'] = $files[1];
                        $data['Article']['img3'] = $files[2];
                    }else{
                        $data['Article']['img'] = $files[0];
                    }
                }else{
                    $data['Article']['img'] = $files;
                }
            }
        }
        if ($model->load($data ) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = Yii::$app->request->post();
        if($data){
            $data['Article']['detail'] = isset($data['content2']) ? $data['content2'] : '';

            // 上传图片
            if( $_FILES['Article']['size']['img'] > 0 ){
                $files = $this->saveImg( $_FILES['Article']);
                if( is_array($files) ){
                    if( count( $files ) == 3 ){
                        $data['Article']['img'] = $files[0];
                        $data['Article']['img2'] = $files[1];
                        $data['Article']['img3'] = $files[2];
                    }else{
                        $data['Article']['img'] = $files[0];
                    }
                }else{
                    $data['Article']['img'] = $files;
                }
            }else{
                unset($data['Article']['img']);
                unset($data['Article']['img2']);
                unset($data['Article']['img3']);
            }
        }
        if ($model->load($data ) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
