<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAdvertisement */

$this->title = $model->adId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Advertisements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-advertisement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adId], [
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
            'adId',
            'npw_ad_slug',
            'npw_ad_countryId',
            'npw_ad_businessId',
            'npw_ad_userId',
            'npw_ad_name',
            'npw_ad_title',
            'npw_ad_description:ntext',
            'npw_ad_remarks',
            'npw_ad_created_date',
            'npw_ad_isPublished',
            'npw_ad_published_date',
            'npw_ad_isUpdated',
            'npw_ad_updated_date',
        ],
    ]) ?>

</div>
