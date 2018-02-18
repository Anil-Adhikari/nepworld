<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_business".
 *
 * @property integer $businessId
 * @property string $npw_business_slug
 * @property integer $npw_business_countryId
 * @property integer $npw_business_userId
 * @property string $npw_business_name
 * @property string $npw_business_address
 * @property string $npw_business_description
 * @property string $npw_business_type
 * @property string $npw_business_remarks
 * @property string $npw_business_map
 * @property string $npw_business_created_date
 * @property string $npw_business_isPublished
 * @property string $npw_business_published_date
 * @property string $npw_business_isUpdated
 * @property string $npw_business_updated_date
 *
 * @property NepworldAdvertisement[] $nepworldAdvertisements
 * @property NepworldCountry $npwBusinessCountry
 * @property NepworldUser $npwBusinessUser
 * @property NepworldImage[] $nepworldImages
 */
class NepworldBusiness extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_business';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['businessId'], 'required'],
            [['businessId', 'npw_business_countryId', 'npw_business_userId'], 'integer'],
            [['npw_business_description', 'npw_business_map'], 'string'],
            [['npw_business_created_date', 'npw_business_published_date', 'npw_business_updated_date'], 'safe'],
            [['npw_business_slug', 'npw_business_name', 'npw_business_address', 'npw_business_type', 'npw_business_remarks'], 'string', 'max' => 400],
            [['npw_business_isPublished', 'npw_business_isUpdated'], 'string', 'max' => 10],
            [['npw_business_slug'], 'unique'],
            [['npw_business_countryId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldCountry::className(), 'targetAttribute' => ['npw_business_countryId' => 'countryId']],
            [['npw_business_userId'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['npw_business_userId' => 'userId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'businessId' => 'Business ID',
            'npw_business_slug' => 'Npw Business Slug',
            'npw_business_countryId' => 'Npw Business Country ID',
            'npw_business_userId' => 'Npw Business User ID',
            'npw_business_name' => 'Npw Business Name',
            'npw_business_address' => 'Npw Business Address',
            'npw_business_description' => 'Npw Business Description',
            'npw_business_type' => 'Npw Business Type',
            'npw_business_remarks' => 'Npw Business Remarks',
            'npw_business_map' => 'Npw Business Map',
            'npw_business_created_date' => 'Npw Business Created Date',
            'npw_business_isPublished' => 'Npw Business Is Published',
            'npw_business_published_date' => 'Npw Business Published Date',
            'npw_business_isUpdated' => 'Npw Business Is Updated',
            'npw_business_updated_date' => 'Npw Business Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldAdvertisements()
    {
        return $this->hasMany(NepworldAdvertisement::className(), ['npw_ad_businessId' => 'businessId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwBusinessCountry()
    {
        return $this->hasOne(NepworldCountry::className(), ['countryId' => 'npw_business_countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwBusinessUser()
    {
        return $this->hasOne(NepworldUser::className(), ['userId' => 'npw_business_userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_businessId' => 'businessId']);
    }
}
