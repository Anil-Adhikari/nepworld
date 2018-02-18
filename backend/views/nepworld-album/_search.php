<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAlbumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-album-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'albumId') ?>

    <?= $form->field($model, 'npw_album_name') ?>

    <?= $form->field($model, 'npw_album_description') ?>

    <?= $form->field($model, 'npw_album_created_date') ?>

    <?= $form->field($model, 'npw_album_isUpdated') ?>

    <?php // echo $form->field($model, 'npw_album_updated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
