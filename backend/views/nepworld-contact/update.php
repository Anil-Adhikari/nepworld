<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldContact */

$this->title = 'Update Nepworld Contact: ' . $model->contactId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contactId, 'url' => ['view', 'id' => $model->contactId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nepworld-contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
