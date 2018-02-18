<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldImageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-image-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'imageId') ?>

    <?= $form->field($model, 'npw_image_name') ?>

    <?= $form->field($model, 'npw_imageUrl') ?>

    <?= $form->field($model, 'npw_image_caption') ?>

    <?= $form->field($model, 'npw_image_description') ?>

    <?php // echo $form->field($model, 'npw_image_pageId') ?>

    <?php // echo $form->field($model, 'npw_image_countryId') ?>

    <?php // echo $form->field($model, 'npw_image_businessId') ?>

    <?php // echo $form->field($model, 'npw_image_adId') ?>

    <?php // echo $form->field($model, 'npw_image_docId') ?>

    <?php // echo $form->field($model, 'npw_image_albumId') ?>

    <?php // echo $form->field($model, 'npw_image_contactId') ?>

    <?php // echo $form->field($model, 'npw_image_userId') ?>

    <?php // echo $form->field($model, 'npw_image_uploaded_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
