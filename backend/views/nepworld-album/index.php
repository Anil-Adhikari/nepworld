<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldAlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Albums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-album-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Album', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'albumId',
            'npw_album_name',
            'npw_album_description:ntext',
            'npw_album_created_date',
            'npw_album_isUpdated',
            // 'npw_album_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
