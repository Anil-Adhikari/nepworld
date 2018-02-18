<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldDocument */

$this->title = $model->docId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-document-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->docId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->docId], [
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
            'docId',
            'npw_doc_slug',
            'npw_doc_countryId',
            'npw_doc_name',
            'npw_doc_title',
            'npw_doc_description:ntext',
            'npw_doc_externalLink',
            'npw_doc_created_date',
            'npw_doc_documentForCountry',
            'npw_doc_isPublished',
            'npw_doc_published_date',
            'npw_doc_isUpdated',
            'npw_doc_updated_date',
        ],
    ]) ?>

</div>
