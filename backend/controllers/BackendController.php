<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\BaseController;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class BackendController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
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
}
