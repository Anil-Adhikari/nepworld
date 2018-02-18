<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldDocument */

$this->title = 'Update Nepworld Document: ' . $model->docId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->docId, 'url' => ['view', 'id' => $model->docId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-document-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
