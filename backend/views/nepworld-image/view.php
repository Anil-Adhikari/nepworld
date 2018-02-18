<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NepworldImage */

$this->title = $model->imageId;
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-image-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->imageId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->imageId], [
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
            'imageId',
            'npw_image_name',
            'npw_imageUrl:url',
            'npw_image_caption:ntext',
            'npw_image_description:ntext',
            'npw_image_pageId',
            'npw_image_countryId',
            'npw_image_businessId',
            'npw_image_adId',
            'npw_image_docId',
            'npw_image_albumId',
            'npw_image_contactId',
            'npw_image_userId',
            'npw_image_uploaded_date',
        ],
    ]) ?>

</div>
