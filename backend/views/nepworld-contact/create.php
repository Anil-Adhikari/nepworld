<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NepworldContact */

$this->title = 'Create Nepworld Contact';
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
