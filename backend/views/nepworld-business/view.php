<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldBusiness */

$this->title = $model->businessId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-business-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->businessId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->businessId], [
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
            'businessId',
            'npw_business_slug',
            'npw_business_countryId',
            'npw_business_userId',
            'npw_business_name',
            'npw_business_address',
            'npw_business_description:ntext',
            'npw_business_type',
            'npw_business_remarks',
            'npw_business_map:ntext',
            'npw_business_created_date',
            'npw_business_isPublished',
            'npw_business_published_date',
            'npw_business_isUpdated',
            'npw_business_updated_date',
        ],
    ]) ?>

</div>
