<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NepworldContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nepworld Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nepworld Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'contactId',
            'npw_contact_name',
            'npw_contact_email:email',
            'npw_contact_phone',
            'npw_contact_address',
            // 'npw_contact_title:ntext',
            // 'npw_contact_description:ntext',
            // 'npw_contact_created_date',
            // 'npw_contact_isPublished',
            // 'npw_contact_published_date',
            // 'npw_contact_isUpdated',
            // 'npw_contact_updated_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
