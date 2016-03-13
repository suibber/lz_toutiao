<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ConfigInfo */

$this->title = 'Create Config Info';
$this->params['breadcrumbs'][] = ['label' => 'Config Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
