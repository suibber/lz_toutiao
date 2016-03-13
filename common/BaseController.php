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
        $hash = date('Y-m-d-H-i-s') . '-' . intval(microtime(true)*10000);
        $ext = pathinfo($uploadFile['name']['img'], PATHINFO_EXTENSION);
        $filename = $hash . '.' . $ext;
        $savefile = '../../frontend/web/uploadimg/'.$filename;
        if(move_uploaded_file($uploadFile['tmp_name']['img'], $savefile)) {
            return $filename;
        }
        return false;
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
