<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAdvertisement */

$this->title = 'Update Nepworld Advertisement: ' . $model->adId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Advertisements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adId, 'url' => ['view', 'id' => $model->adId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-advertisement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
