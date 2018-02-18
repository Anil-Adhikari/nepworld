<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldCountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'countryId',
            'npw_country_slug',
            'npw_country_name',
            'npw_country_title',
            'npw_country_description:ntext',
            // 'npw_country_externalLink',
            // 'npw_country_remarks:ntext',
            // 'npw_country_created_date',
            // 'npw_country_isPublished',
            // 'npw_country_published_date',
            // 'npw_country_isUpdated',
            // 'npw_country_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
