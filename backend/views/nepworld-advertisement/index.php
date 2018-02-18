<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldAdvertisementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Advertisements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-advertisement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Advertisement', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adId',
            'npw_ad_slug',
            'npw_ad_countryId',
            'npw_ad_businessId',
            'npw_ad_userId',
            // 'npw_ad_name',
            // 'npw_ad_title',
            // 'npw_ad_description:ntext',
            // 'npw_ad_remarks',
            // 'npw_ad_created_date',
            // 'npw_ad_isPublished',
            // 'npw_ad_published_date',
            // 'npw_ad_isUpdated',
            // 'npw_ad_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
