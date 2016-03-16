<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property integer $model
 * @property integer $type
 * @property string $title
 * @property string $created_time
 * @property string $updated_time
 * @property string $author_name
 * @property string $detail
 * @property integer $reader
 * @property integer $agree
 * @property string $img
 */
class Article extends \yii\db\ActiveRecord
{
    public static $MODELS = [
        0 => '资讯',
        1 => '娱乐',
    ];
    const MODEL_NEWS = 0;
    const MODEL_FUN = 1;

    public static $TYPES = [
        0 => '默认',
    ];

    public static $IS_RECOMMENDS = [
        0 => '否',
        1 => '是',
    ];

    public function getModel_label()
    {
        return static::$MODELS[$this->model];
    }
    
    public function getType_label()
    {
        return static::$TYPES[$this->type];
    }

    public function getRecommend_label()
    {
        return static::$IS_RECOMMENDS[$this->is_recommend];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'type', 'reader', 'agree', 'is_recommend'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['detail'], 'string'],
            [['title', 'img'], 'string', 'max' => 200],
            [['author_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => '类型',
            'type' => '分类',
            'title' => '标题',
            'created_time' => '创建时间',
            'updated_time' => '更新时间',
            'author_name' => '作者名字',
            'detail' => '明细',
            'reader' => '阅读(笑脸)次数',
            'agree' => '赞同(哭脸)次数',
            'img' => '图片(不修改请留空)',
            'is_recommend' => '推荐',
        ];
    }

    public static function getNewsArticles($page)
    {
        $articles = self::find()
            ->where(['model' => self::MODEL_NEWS])
            ->offset(($page[1]-1)*$page[0])
            ->limit($page[0])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $articles;
    }

    public static function getFunArticles($page)
    {
        $articles = self::find()
            ->where(['model' => self::MODEL_FUN])
            ->offset(($page[1]-1)*$page[0])
            ->limit($page[0])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $articles;
    }

    public static function getFunArticlesTotlePage()
    {
        $count = self::find()
            ->where(['model' => self::MODEL_FUN])
            ->count();
        $page = ceil( $count/Yii::$app->params['perPage'] );
        return $page;
    }

    public static function getNewsArticlesTotlePage()
    {
        $count = self::find()
            ->where(['model' => self::MODEL_NEWS])
            ->count();
        $page = ceil( $count/Yii::$app->params['perPage'] );
        return $page;
    }

    public static function getRandomArticles( $number )
    {
        $articles = self::find()
            ->where(['model' => self::MODEL_NEWS])
            ->limit( $number )
            ->all();
        return $articles;
    }
}
