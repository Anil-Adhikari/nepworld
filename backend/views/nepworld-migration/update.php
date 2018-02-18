<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldMigration */

$this->title = 'Update Nepworld Migration: ' . $model->migrationId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Migrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->migrationId, 'url' => ['view', 'id' => $model->migrationId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-migration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
