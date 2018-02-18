<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_contact".
 *
 * @property integer $contactId
 * @property string $npw_contact_name
 * @property string $npw_contact_email
 * @property string $npw_contact_phone
 * @property string $npw_contact_address
 * @property string $npw_contact_title
 * @property string $npw_contact_description
 * @property string $npw_contact_created_date
 * @property string $npw_contact_isPublished
 * @property string $npw_contact_published_date
 * @property string $npw_contact_isUpdated
 * @property string $npw_contact_updated_date
 *
 * @property NepworldImage[] $nepworldImages
 */
class NepworldContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contactId'], 'required'],
            [['contactId'], 'integer'],
            [['npw_contact_title', 'npw_contact_description'], 'string'],
            [['npw_contact_created_date', 'npw_contact_published_date', 'npw_contact_updated_date'], 'safe'],
            [['npw_contact_name', 'npw_contact_address'], 'string', 'max' => 400],
            [['npw_contact_email', 'npw_contact_phone'], 'string', 'max' => 50],
            [['npw_contact_isPublished', 'npw_contact_isUpdated'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contactId' => 'Contact ID',
            'npw_contact_name' => 'Npw Contact Name',
            'npw_contact_email' => 'Npw Contact Email',
            'npw_contact_phone' => 'Npw Contact Phone',
            'npw_contact_address' => 'Npw Contact Address',
            'npw_contact_title' => 'Npw Contact Title',
            'npw_contact_description' => 'Npw Contact Description',
            'npw_contact_created_date' => 'Npw Contact Created Date',
            'npw_contact_isPublished' => 'Npw Contact Is Published',
            'npw_contact_published_date' => 'Npw Contact Published Date',
            'npw_contact_isUpdated' => 'Npw Contact Is Updated',
            'npw_contact_updated_date' => 'Npw Contact Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_contactId' => 'contactId']);
    }
}
