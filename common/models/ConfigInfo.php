<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config_info}}".
 *
 * @property integer $id
 * @property integer $type
 * @property string $title
 * @property string $img
 * @property string $url
 * @property integer $rank
 */
class ConfigInfo extends \yii\db\ActiveRecord
{

    public static $TYPES =[
        0 => '其它',
        1 => '首页-滚图',
        2 => '首页-娱乐头条',
    ];
    const TYPE_INDEX_SCROLL = 1;
    const TYPE_INDEX_FUN_HEADLINE = 2;

    public function getType_label()
    {
        return static::$TYPES[$this->type];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%config_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'rank'], 'integer'],
            [['title', 'img', 'url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '类型',
            'title' => '标题',
            'img' => '图片(不修改请留空)',
            'url' => '跳转地址',
            'rank' => '排序',
        ];
    }
}
