<?php

namespace common;

use Yii;
use yii\web\Controller;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class BaseController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }


    public static function saveImg($uploadFile)
    {
        $files = [];
        foreach( $uploadFile['name'] as $k => $v ){
            $hash = date('Y-m-d-H-i-s') . '-' . intval(microtime(true)*10000) . '-' . rand(1000,9999);
            $ext = pathinfo($uploadFile['name'][$k], PATHINFO_EXTENSION);
            $filename = $hash . '.' . $ext;
            $savefile = '../../frontend/web/uploadimg/'.$filename;
            if(move_uploaded_file($uploadFile['tmp_name'][$k], $savefile)) {
                $files[] = $filename;
            }
        }
        if( count($files) > 1 ){
            return $files;
        }else{
            return $files[0];
        }
    }

     /**                                                                                                                                                                     
     * 返回分页信息
     * @return [数组] [是否分页，当前页面显示数，页数]
     */
    public function processPaging() {
        $request_params = Yii::$app->request->queryParams;
        return [
            Yii::$app->params['perPage'], 
            isset($request_params['page'])?$request_params['page']:0
        ];
    }  
}
