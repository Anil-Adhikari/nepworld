<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldDocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Documents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-document-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Document', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'docId',
            'npw_doc_slug',
            'npw_doc_countryId',
            'npw_doc_name',
            'npw_doc_title',
            // 'npw_doc_description:ntext',
            // 'npw_doc_externalLink',
            // 'npw_doc_created_date',
            // 'npw_doc_documentForCountry',
            // 'npw_doc_isPublished',
            // 'npw_doc_published_date',
            // 'npw_doc_isUpdated',
            // 'npw_doc_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
