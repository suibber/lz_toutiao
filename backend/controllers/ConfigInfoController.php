<?php

namespace backend\controllers;

use Yii;
use common\models\ConfigInfo;
use common\models\ConfigInfoSearch;
use backend\controllers\BackendController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConfigInfoController implements the CRUD actions for ConfigInfo model.
 */
class ConfigInfoController extends BackendController
{
    /**
     * Lists all ConfigInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConfigInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ConfigInfo model.
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
     * Creates a new ConfigInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ConfigInfo();
        $data = Yii::$app->request->post();
        if($data){
            // 上传图片
            if( $_FILES['ConfigInfo']['size'] > 0 ){
                $filename = $this->saveImg( $_FILES['ConfigInfo']);
                $data['ConfigInfo']['img'] = $filename;
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
     * Updates an existing ConfigInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = Yii::$app->request->post();
        if($data){
            // 上传图片
            if( $_FILES['ConfigInfo']['size']['img'] > 0 ){
                $filename = $this->saveImg( $_FILES['ConfigInfo']);
                $data['ConfigInfo']['img'] = $filename;
            }else{
                unset($data['ConfigInfo']['img']);
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
     * Deletes an existing ConfigInfo model.
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
     * Finds the ConfigInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ConfigInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ConfigInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
