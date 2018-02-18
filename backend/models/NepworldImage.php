<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_image".
 *
 * @property integer $imageId
 * @property string $npw_image_name
 * @property string $npw_imageUrl
 * @property string $npw_image_caption
 * @property string $npw_image_description
 * @property integer $npw_image_pageId
 * @property integer $npw_image_countryId
 * @property integer $npw_image_businessId
 * @property integer $npw_image_adId
 * @property integer $npw_image_docId
 * @property integer $npw_image_albumId
 * @property integer $npw_image_contactId
 * @property integer $npw_image_userId
 * @property string $npw_image_uploaded_date
 *
 * @property NepworldAdvertisement $npwImageAd
 * @property NepworldAlbum $npwImageAlbum
 * @property NepworldBusiness $npwImageBusiness
 * @property NepworldContact $npwImageContact
 * @property NepworldCountry $npwImageCountry
 * @property NepworldDocument $npwImageDoc
 * @property NepworldPage $npwImagePage
 * @property NepworldUser $npwImageUser
 */
class NepworldImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageId', 'npw_image_uploaded_date'], 'required'],
            [['imageId', 'npw_image_pageId', 'npw_image_countryId', 'npw_image_businessId', 'npw_image_adId', 'npw_image_docId', 'npw_image_albumId', 'npw_image_contactId', 'npw_image_userId'], 'integer'],
            [['npw_image_caption', 'npw_image_description'], 'string'],
            [['npw_image_uploaded_date'], 'safe'],
            [['npw_image_name', 'npw_imageUrl'], 'string', 'max' => 200],
            [['npw_image_adId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldAdvertisement::className(), 'targetAttribute' => ['npw_image_adId' => 'adId']],
            [['npw_image_albumId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldAlbum::className(), 'targetAttribute' => ['npw_image_albumId' => 'albumId']],
            [['npw_image_businessId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldBusiness::className(), 'targetAttribute' => ['npw_image_businessId' => 'businessId']],
            [['npw_image_contactId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldContact::className(), 'targetAttribute' => ['npw_image_contactId' => 'contactId']],
            [['npw_image_countryId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldCountry::className(), 'targetAttribute' => ['npw_image_countryId' => 'countryId']],
            [['npw_image_docId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldDocument::className(), 'targetAttribute' => ['npw_image_docId' => 'docId']],
            [['npw_image_pageId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldPage::className(), 'targetAttribute' => ['npw_image_pageId' => 'pageId']],
            [['npw_image_userId'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['npw_image_userId' => 'userId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imageId' => 'Image ID',
            'npw_image_name' => 'Npw Image Name',
            'npw_imageUrl' => 'Npw Image Url',
            'npw_image_caption' => 'Npw Image Caption',
            'npw_image_description' => 'Npw Image Description',
            'npw_image_pageId' => 'Npw Image Page ID',
            'npw_image_countryId' => 'Npw Image Country ID',
            'npw_image_businessId' => 'Npw Image Business ID',
            'npw_image_adId' => 'Npw Image Ad ID',
            'npw_image_docId' => 'Npw Image Doc ID',
            'npw_image_albumId' => 'Npw Image Album ID',
            'npw_image_contactId' => 'Npw Image Contact ID',
            'npw_image_userId' => 'Npw Image User ID',
            'npw_image_uploaded_date' => 'Npw Image Uploaded Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageAd()
    {
        return $this->hasOne(NepworldAdvertisement::className(), ['adId' => 'npw_image_adId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageAlbum()
    {
        return $this->hasOne(NepworldAlbum::className(), ['albumId' => 'npw_image_albumId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageBusiness()
    {
        return $this->hasOne(NepworldBusiness::className(), ['businessId' => 'npw_image_businessId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageContact()
    {
        return $this->hasOne(NepworldContact::className(), ['contactId' => 'npw_image_contactId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageCountry()
    {
        return $this->hasOne(NepworldCountry::className(), ['countryId' => 'npw_image_countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageDoc()
    {
        return $this->hasOne(NepworldDocument::className(), ['docId' => 'npw_image_docId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImagePage()
    {
        return $this->hasOne(NepworldPage::className(), ['pageId' => 'npw_image_pageId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwImageUser()
    {
        return $this->hasOne(NepworldUser::className(), ['userId' => 'npw_image_userId']);
    }
}
