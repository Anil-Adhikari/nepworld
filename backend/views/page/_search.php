<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pageId') ?>

    <?= $form->field($model, 'npw_page_slug') ?>

    <?= $form->field($model, 'npw_page_parentId') ?>

    <?= $form->field($model, 'npw_page_title') ?>

    <?= $form->field($model, 'npw_page_heading') ?>

    <?php // echo $form->field($model, 'npw_page_description') ?>

    <?php // echo $form->field($model, 'npw_page_remarks') ?>

    <?php // echo $form->field($model, 'npw_page_externalLink') ?>

    <?php // echo $form->field($model, 'npw_page_created_date') ?>

    <?php // echo $form->field($model, 'npw_page_isPublished') ?>

    <?php // echo $form->field($model, 'npw_page_updated_date') ?>

    <?php // echo $form->field($model, 'npw_page_isUpdated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
