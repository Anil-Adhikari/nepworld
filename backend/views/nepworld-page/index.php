<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pageId',
            'npw_page_slug',
            'npw_page_parentId',
            'npw_page_title',
            'npw_page_heading',
            // 'npw_page_description:ntext',
            // 'npw_page_remarks:ntext',
            // 'npw_page_externalLink',
            // 'npw_page_created_date',
            // 'npw_page_isPublished',
            // 'npw_page_updated_date',
            // 'npw_page_isUpdated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
