<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\ConfigInfo;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ConfigInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Config Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Config Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'label' => '类型',
                'format' => 'raw',
                'attribute' => 'type',
                'filter' => ConfigInfo::$TYPES,
                'value' => function($model){return $model->type_label;},
            ],
            'title',
            //'img',
            //'url:url',
            'rank',
            // 'info',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
