<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldBusiness */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-business-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'businessId')->textInput() ?>

    <?= $form->field($model, 'npw_business_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_countryId')->textInput() ?>

    <?= $form->field($model, 'npw_business_userId')->textInput() ?>

    <?= $form->field($model, 'npw_business_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_business_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_map')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_business_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_business_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_published_date')->textInput() ?>

    <?= $form->field($model, 'npw_business_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_business_updated_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
