<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAdvertisementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-advertisement-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'adId') ?>

    <?= $form->field($model, 'npw_ad_slug') ?>

    <?= $form->field($model, 'npw_ad_countryId') ?>

    <?= $form->field($model, 'npw_ad_businessId') ?>

    <?= $form->field($model, 'npw_ad_userId') ?>

    <?php // echo $form->field($model, 'npw_ad_name') ?>

    <?php // echo $form->field($model, 'npw_ad_title') ?>

    <?php // echo $form->field($model, 'npw_ad_description') ?>

    <?php // echo $form->field($model, 'npw_ad_remarks') ?>

    <?php // echo $form->field($model, 'npw_ad_created_date') ?>

    <?php // echo $form->field($model, 'npw_ad_isPublished') ?>

    <?php // echo $form->field($model, 'npw_ad_published_date') ?>

    <?php // echo $form->field($model, 'npw_ad_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_ad_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
