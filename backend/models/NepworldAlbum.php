<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_album".
 *
 * @property integer $albumId
 * @property string $npw_album_name
 * @property string $npw_album_description
 * @property string $npw_album_created_date
 * @property string $npw_album_isUpdated
 * @property string $npw_album_updated_date
 *
 * @property NepworldImage[] $nepworldImages
 */
class NepworldAlbum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['albumId'], 'required'],
            [['albumId'], 'integer'],
            [['npw_album_description'], 'string'],
            [['npw_album_created_date'], 'safe'],
            [['npw_album_name'], 'string', 'max' => 200],
            [['npw_album_isUpdated'], 'string', 'max' => 10],
            [['npw_album_updated_date'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'albumId' => 'Album ID',
            'npw_album_name' => 'Npw Album Name',
            'npw_album_description' => 'Npw Album Description',
            'npw_album_created_date' => 'Npw Album Created Date',
            'npw_album_isUpdated' => 'Npw Album Is Updated',
            'npw_album_updated_date' => 'Npw Album Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_albumId' => 'albumId']);
    }
}
