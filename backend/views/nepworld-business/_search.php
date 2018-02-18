<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldBusinessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-business-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'businessId') ?>

    <?= $form->field($model, 'npw_business_slug') ?>

    <?= $form->field($model, 'npw_business_countryId') ?>

    <?= $form->field($model, 'npw_business_userId') ?>

    <?= $form->field($model, 'npw_business_name') ?>

    <?php // echo $form->field($model, 'npw_business_address') ?>

    <?php // echo $form->field($model, 'npw_business_description') ?>

    <?php // echo $form->field($model, 'npw_business_type') ?>

    <?php // echo $form->field($model, 'npw_business_remarks') ?>

    <?php // echo $form->field($model, 'npw_business_map') ?>

    <?php // echo $form->field($model, 'npw_business_created_date') ?>

    <?php // echo $form->field($model, 'npw_business_isPublished') ?>

    <?php // echo $form->field($model, 'npw_business_published_date') ?>

    <?php // echo $form->field($model, 'npw_business_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_business_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
