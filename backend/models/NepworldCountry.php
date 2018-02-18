<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_country".
 *
 * @property integer $countryId
 * @property string $npw_country_slug
 * @property string $npw_country_name
 * @property string $npw_country_title
 * @property string $npw_country_description
 * @property string $npw_country_externalLink
 * @property string $npw_country_remarks
 * @property string $npw_country_created_date
 * @property string $npw_country_isPublished
 * @property string $npw_country_published_date
 * @property string $npw_country_isUpdated
 * @property string $npw_country_updated_date
 *
 * @property NepworldAdvertisement[] $nepworldAdvertisements
 * @property NepworldBusiness[] $nepworldBusinesses
 * @property NepworldDocument[] $nepworldDocuments
 * @property NepworldImage[] $nepworldImages
 */
class NepworldCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryId', 'npw_country_created_date'], 'required'],
            [['countryId'], 'integer'],
            [['npw_country_description', 'npw_country_remarks'], 'string'],
            [['npw_country_created_date', 'npw_country_published_date'], 'safe'],
            [['npw_country_slug', 'npw_country_name', 'npw_country_externalLink'], 'string', 'max' => 400],
            [['npw_country_title'], 'string', 'max' => 1000],
            [['npw_country_isPublished', 'npw_country_isUpdated'], 'string', 'max' => 10],
            [['npw_country_updated_date'], 'string', 'max' => 45],
            [['npw_country_slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'countryId' => 'Country ID',
            'npw_country_slug' => 'Npw Country Slug',
            'npw_country_name' => 'Npw Country Name',
            'npw_country_title' => 'Npw Country Title',
            'npw_country_description' => 'Npw Country Description',
            'npw_country_externalLink' => 'Npw Country External Link',
            'npw_country_remarks' => 'Npw Country Remarks',
            'npw_country_created_date' => 'Npw Country Created Date',
            'npw_country_isPublished' => 'Npw Country Is Published',
            'npw_country_published_date' => 'Npw Country Published Date',
            'npw_country_isUpdated' => 'Npw Country Is Updated',
            'npw_country_updated_date' => 'Npw Country Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldAdvertisements()
    {
        return $this->hasMany(NepworldAdvertisement::className(), ['npw_ad_countryId' => 'countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldBusinesses()
    {
        return $this->hasMany(NepworldBusiness::className(), ['npw_business_countryId' => 'countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldDocuments()
    {
        return $this->hasMany(NepworldDocument::className(), ['npw_doc_countryId' => 'countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_countryId' => 'countryId']);
    }
}
