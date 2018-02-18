<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'imageId',
            'npw_image_name',
            'npw_imageUrl:url',
            'npw_image_caption:ntext',
            'npw_image_description:ntext',
            // 'npw_image_pageId',
            // 'npw_image_countryId',
            // 'npw_image_businessId',
            // 'npw_image_adId',
            // 'npw_image_docId',
            // 'npw_image_albumId',
            // 'npw_image_contactId',
            // 'npw_image_userId',
            // 'npw_image_uploaded_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
