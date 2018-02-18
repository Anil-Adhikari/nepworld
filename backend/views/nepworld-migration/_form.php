<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldMigration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nepworld-migration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'migrationId')->textInput() ?>

    <?= $form->field($model, 'npw_migration_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
