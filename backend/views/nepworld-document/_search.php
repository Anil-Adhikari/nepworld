<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldDocumentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-document-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'docId') ?>

    <?= $form->field($model, 'npw_doc_slug') ?>

    <?= $form->field($model, 'npw_doc_countryId') ?>

    <?= $form->field($model, 'npw_doc_name') ?>

    <?= $form->field($model, 'npw_doc_title') ?>

    <?php // echo $form->field($model, 'npw_doc_description') ?>

    <?php // echo $form->field($model, 'npw_doc_externalLink') ?>

    <?php // echo $form->field($model, 'npw_doc_created_date') ?>

    <?php // echo $form->field($model, 'npw_doc_documentForCountry') ?>

    <?php // echo $form->field($model, 'npw_doc_isPublished') ?>

    <?php // echo $form->field($model, 'npw_doc_published_date') ?>

    <?php // echo $form->field($model, 'npw_doc_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_doc_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
