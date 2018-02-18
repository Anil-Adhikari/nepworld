<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldDocument */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-document-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'docId')->textInput() ?>

    <?= $form->field($model, 'npw_doc_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_countryId')->textInput() ?>

    <?= $form->field($model, 'npw_doc_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_doc_externalLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_doc_documentForCountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_published_date')->textInput() ?>

    <?= $form->field($model, 'npw_doc_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_doc_updated_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
