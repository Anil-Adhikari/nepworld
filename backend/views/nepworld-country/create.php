<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NepworldCountry */

$this->title = 'Create Nepworld Country';
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
