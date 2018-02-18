<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldAlbum */

$this->title = $model->albumId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-album-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->albumId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->albumId], [
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
            'albumId',
            'npw_album_name',
            'npw_album_description:ntext',
            'npw_album_created_date',
            'npw_album_isUpdated',
            'npw_album_updated_date',
        ],
    ]) ?>

</div>
