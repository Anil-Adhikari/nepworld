<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imageId')->textInput() ?>

    <?= $form->field($model, 'npw_image_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_imageUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_image_caption')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_image_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_image_pageId')->textInput() ?>

    <?= $form->field($model, 'npw_image_countryId')->textInput() ?>

    <?= $form->field($model, 'npw_image_businessId')->textInput() ?>

    <?= $form->field($model, 'npw_image_adId')->textInput() ?>

    <?= $form->field($model, 'npw_image_docId')->textInput() ?>

    <?= $form->field($model, 'npw_image_albumId')->textInput() ?>

    <?= $form->field($model, 'npw_image_contactId')->textInput() ?>

    <?= $form->field($model, 'npw_image_userId')->textInput() ?>

    <?= $form->field($model, 'npw_image_uploaded_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
