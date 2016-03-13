<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Article;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'model',
            [
                'label' => '类型',
                'format' => 'raw',
                'attribute' => 'model',
                'filter' => Article::$MODELS,
                'value' => function($model){return $model->model_label;},
            ],
            [
                'label' => '分类',
                'format' => 'raw',
                'attribute' => 'type',
                'filter' => Article::$TYPES,
                'value' => function($model){return $model->type_label;},
            ],
            [
                'label' => '是否推荐',
                'format' => 'raw',
                'attribute' => 'is_recommend',
                'filter' => Article::$IS_RECOMMENDS,
                'value' => function($model){return $model->recommend_label;},
            ],
            'title',
            //'created_time',
            'updated_time',
            // 'author_name',
            // 'detail:ntext',
            // 'reader',
            // 'agree',
            // 'img',
            // 'is_recommend',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
