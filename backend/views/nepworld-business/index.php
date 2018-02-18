<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldBusinessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Businesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-business-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Business', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'businessId',
            'npw_business_slug',
            'npw_business_countryId',
            'npw_business_userId',
            'npw_business_name',
            // 'npw_business_address',
            // 'npw_business_description:ntext',
            // 'npw_business_type',
            // 'npw_business_remarks',
            // 'npw_business_map:ntext',
            // 'npw_business_created_date',
            // 'npw_business_isPublished',
            // 'npw_business_published_date',
            // 'npw_business_isUpdated',
            // 'npw_business_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
