<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldContact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contactId')->textInput() ?>

    <?= $form->field($model, 'npw_contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_contact_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_contact_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_contact_isPublished')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_published_date')->textInput() ?>

    <?= $form->field($model, 'npw_contact_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_contact_updated_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
