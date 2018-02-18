<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldBusiness */

$this->title = 'Update Nepworld Business: ' . $model->businessId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->businessId, 'url' => ['view', 'id' => $model->businessId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-business-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
