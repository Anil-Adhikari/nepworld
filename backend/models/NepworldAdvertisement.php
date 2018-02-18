<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_advertisement".
 *
 * @property integer $adId
 * @property string $npw_ad_slug
 * @property integer $npw_ad_countryId
 * @property integer $npw_ad_businessId
 * @property integer $npw_ad_userId
 * @property string $npw_ad_name
 * @property string $npw_ad_title
 * @property string $npw_ad_description
 * @property string $npw_ad_remarks
 * @property string $npw_ad_created_date
 * @property string $npw_ad_isPublished
 * @property string $npw_ad_published_date
 * @property string $npw_ad_isUpdated
 * @property string $npw_ad_updated_date
 *
 * @property NepworldBusiness $npwAdBusiness
 * @property NepworldCountry $npwAdCountry
 * @property NepworldUser $npwAdUser
 * @property NepworldImage[] $nepworldImages
 */
class NepworldAdvertisement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_advertisement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adId'], 'required'],
            [['adId', 'npw_ad_countryId', 'npw_ad_businessId', 'npw_ad_userId'], 'integer'],
            [['npw_ad_description'], 'string'],
            [['npw_ad_created_date', 'npw_ad_published_date', 'npw_ad_updated_date'], 'safe'],
            [['npw_ad_slug', 'npw_ad_name', 'npw_ad_title', 'npw_ad_remarks'], 'string', 'max' => 400],
            [['npw_ad_isPublished', 'npw_ad_isUpdated'], 'string', 'max' => 10],
            [['npw_ad_slug'], 'unique'],
            [['npw_ad_businessId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldBusiness::className(), 'targetAttribute' => ['npw_ad_businessId' => 'businessId']],
            [['npw_ad_countryId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldCountry::className(), 'targetAttribute' => ['npw_ad_countryId' => 'countryId']],
            [['npw_ad_userId'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['npw_ad_userId' => 'userId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adId' => 'Ad ID',
            'npw_ad_slug' => 'Npw Ad Slug',
            'npw_ad_countryId' => 'Npw Ad Country ID',
            'npw_ad_businessId' => 'Npw Ad Business ID',
            'npw_ad_userId' => 'Npw Ad User ID',
            'npw_ad_name' => 'Npw Ad Name',
            'npw_ad_title' => 'Npw Ad Title',
            'npw_ad_description' => 'Npw Ad Description',
            'npw_ad_remarks' => 'Npw Ad Remarks',
            'npw_ad_created_date' => 'Npw Ad Created Date',
            'npw_ad_isPublished' => 'Npw Ad Is Published',
            'npw_ad_published_date' => 'Npw Ad Published Date',
            'npw_ad_isUpdated' => 'Npw Ad Is Updated',
            'npw_ad_updated_date' => 'Npw Ad Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwAdBusiness()
    {
        return $this->hasOne(NepworldBusiness::className(), ['businessId' => 'npw_ad_businessId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwAdCountry()
    {
        return $this->hasOne(NepworldCountry::className(), ['countryId' => 'npw_ad_countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwAdUser()
    {
        return $this->hasOne(NepworldUser::className(), ['userId' => 'npw_ad_userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_adId' => 'adId']);
    }
}
