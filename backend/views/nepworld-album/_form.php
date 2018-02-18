<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAlbum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-album-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'albumId')->textInput() ?>

    <?= $form->field($model, 'npw_album_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_album_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'npw_album_created_date')->textInput() ?>

    <?= $form->field($model, 'npw_album_isUpdated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npw_album_updated_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
