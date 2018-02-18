<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldCountry */

$this->title = 'Update Nepworld Country: ' . $model->countryId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->countryId, 'url' => ['view', 'id' => $model->countryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
