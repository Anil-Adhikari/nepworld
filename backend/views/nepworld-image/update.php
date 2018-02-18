<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldImage */

$this->title = 'Update Nepworld Image: ' . $model->imageId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->imageId, 'url' => ['view', 'id' => $model->imageId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
