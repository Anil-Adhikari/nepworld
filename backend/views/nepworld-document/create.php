<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NepworldDocument */

$this->title = 'Create Nepworld Document';
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
