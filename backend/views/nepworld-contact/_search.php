<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contactId') ?>

    <?= $form->field($model, 'npw_contact_name') ?>

    <?= $form->field($model, 'npw_contact_email') ?>

    <?= $form->field($model, 'npw_contact_phone') ?>

    <?= $form->field($model, 'npw_contact_address') ?>

    <?php // echo $form->field($model, 'npw_contact_title') ?>

    <?php // echo $form->field($model, 'npw_contact_description') ?>

    <?php // echo $form->field($model, 'npw_contact_created_date') ?>

    <?php // echo $form->field($model, 'npw_contact_isPublished') ?>

    <?php // echo $form->field($model, 'npw_contact_published_date') ?>

    <?php // echo $form->field($model, 'npw_contact_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_contact_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
