<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NepworldImage */

$this->title = 'Create Nepworld Image';
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
