<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAlbum */

$this->title = 'Update Nepworld Album: ' . $model->albumId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->albumId, 'url' => ['view', 'id' => $model->albumId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-album-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
