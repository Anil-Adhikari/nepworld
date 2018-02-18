<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'countryId')->textInput() ?>

    <?= $form->field($model, 'npw_country_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_country_externalLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_country_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_country_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_published_date')->textInput() ?>

    <?= $form->field($model, 'npw_country_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_country_updated_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
