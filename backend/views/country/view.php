<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Country */

$this->title = $model->countryId;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->countryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->countryId], [
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
            'countryId',
            'npw_country_slug',
            'npw_country_name',
            'npw_country_title',
            'npw_country_description:ntext',
            'npw_country_externalLink',
            'npw_country_remarks:ntext',
            'npw_country_created_date',
            'npw_country_isPublished',
            'npw_country_published_date',
            'npw_country_isUpdated',
            'npw_country_updated_date',
        ],
    ]) ?>

</div>
