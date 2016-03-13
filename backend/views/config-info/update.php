<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ConfigInfo */

$this->title = 'Update Config Info: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Config Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="config-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
