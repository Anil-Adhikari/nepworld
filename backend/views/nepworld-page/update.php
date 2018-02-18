<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldPage */

$this->title = 'Update Nepworld Page: ' . $model->pageId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pageId, 'url' => ['view', 'id' => $model->pageId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
