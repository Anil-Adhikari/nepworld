<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CountrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'countryId') ?>

    <?= $form->field($model, 'npw_country_slug') ?>

    <?= $form->field($model, 'npw_country_name') ?>

    <?= $form->field($model, 'npw_country_title') ?>

    <?= $form->field($model, 'npw_country_description') ?>

    <?php // echo $form->field($model, 'npw_country_externalLink') ?>

    <?php // echo $form->field($model, 'npw_country_remarks') ?>

    <?php // echo $form->field($model, 'npw_country_created_date') ?>

    <?php // echo $form->field($model, 'npw_country_isPublished') ?>

    <?php // echo $form->field($model, 'npw_country_published_date') ?>

    <?php // echo $form->field($model, 'npw_country_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_country_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
