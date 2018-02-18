<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */

$this->title = $model->pageId;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pageId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pageId], [
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
            'pageId',
            'npw_page_slug',
            'npw_page_parentId',
            'npw_page_title',
            'npw_page_heading',
            'npw_page_description:ntext',
            'npw_page_remarks:ntext',
            'npw_page_externalLink',
            'npw_page_created_date',
            'npw_page_isPublished',
            'npw_page_updated_date',
            'npw_page_isUpdated',
        ],
    ]) ?>

</div>
