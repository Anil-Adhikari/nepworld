<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_document".
 *
 * @property integer $docId
 * @property string $npw_doc_slug
 * @property integer $npw_doc_countryId
 * @property string $npw_doc_name
 * @property string $npw_doc_title
 * @property string $npw_doc_description
 * @property string $npw_doc_externalLink
 * @property string $npw_doc_created_date
 * @property string $npw_doc_documentForCountry
 * @property string $npw_doc_isPublished
 * @property string $npw_doc_published_date
 * @property string $npw_doc_isUpdated
 * @property string $npw_doc_updated_date
 *
 * @property NepworldCountry $npwDocCountry
 * @property NepworldImage[] $nepworldImages
 */
class NepworldDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['docId', 'npw_doc_created_date'], 'required'],
            [['docId', 'npw_doc_countryId'], 'integer'],
            [['npw_doc_description'], 'string'],
            [['npw_doc_created_date', 'npw_doc_published_date', 'npw_doc_updated_date'], 'safe'],
            [['npw_doc_slug', 'npw_doc_name', 'npw_doc_title', 'npw_doc_externalLink', 'npw_doc_documentForCountry'], 'string', 'max' => 400],
            [['npw_doc_isPublished', 'npw_doc_isUpdated'], 'string', 'max' => 10],
            [['npw_doc_slug'], 'unique'],
            [['npw_doc_countryId'], 'exist', 'skipOnError' => true, 'targetClass' => NepworldCountry::className(), 'targetAttribute' => ['npw_doc_countryId' => 'countryId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'docId' => 'Doc ID',
            'npw_doc_slug' => 'Npw Doc Slug',
            'npw_doc_countryId' => 'Npw Doc Country ID',
            'npw_doc_name' => 'Npw Doc Name',
            'npw_doc_title' => 'Npw Doc Title',
            'npw_doc_description' => 'Npw Doc Description',
            'npw_doc_externalLink' => 'Npw Doc External Link',
            'npw_doc_created_date' => 'Npw Doc Created Date',
            'npw_doc_documentForCountry' => 'Npw Doc Document For Country',
            'npw_doc_isPublished' => 'Npw Doc Is Published',
            'npw_doc_published_date' => 'Npw Doc Published Date',
            'npw_doc_isUpdated' => 'Npw Doc Is Updated',
            'npw_doc_updated_date' => 'Npw Doc Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNpwDocCountry()
    {
        return $this->hasOne(NepworldCountry::className(), ['countryId' => 'npw_doc_countryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_docId' => 'docId']);
    }
}
