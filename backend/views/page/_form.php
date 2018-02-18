<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pageId')->textInput() ?>

    <?= $form->field($model, 'npw_page_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_page_parentId')->textInput() ?>

    <?= $form->field($model, 'npw_page_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_page_heading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_page_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_page_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_page_externalLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_page_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_page_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_page_updated_date')->textInput() ?>

    <?= $form->field($model, 'npw_page_isUpdated')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
