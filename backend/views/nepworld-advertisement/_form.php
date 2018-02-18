<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAdvertisement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-advertisement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adId')->textInput() ?>

    <?= $form->field($model, 'npw_ad_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_countryId')->textInput() ?>

    <?= $form->field($model, 'npw_ad_businessId')->textInput() ?>

    <?= $form->field($model, 'npw_ad_userId')->textInput() ?>

    <?= $form->field($model, 'npw_ad_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_ad_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_ad_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_published_date')->textInput() ?>

    <?= $form->field($model, 'npw_ad_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_ad_updated_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
