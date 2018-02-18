<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldContact */

$this->title = $model->contactId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-contact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->contactId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->contactId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'contactId',
            'npw_contact_name',
            'npw_contact_email:email',
            'npw_contact_phone',
            'npw_contact_address',
            'npw_contact_title:ntext',
            'npw_contact_description:ntext',
            'npw_contact_created_date',
            'npw_contact_isPublished',
            'npw_contact_published_date',
            'npw_contact_isUpdated',
            'npw_contact_updated_date',
        ],
    ]) ?>

</div>
