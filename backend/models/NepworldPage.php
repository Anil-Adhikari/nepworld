<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_page".
 *
 * @property integer $pageId
 * @property string $npw_page_slug
 * @property integer $npw_page_parentId
 * @property string $npw_page_title
 * @property string $npw_page_heading
 * @property string $npw_page_description
 * @property string $npw_page_remarks
 * @property string $npw_page_externalLink
 * @property string $npw_page_created_date
 * @property string $npw_page_isPublished
 * @property string $npw_page_updated_date
 * @property string $npw_page_isUpdated
 *
 * @property NepworldImage[] $nepworldImages
 */
class NepworldPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageId', 'npw_page_title', 'npw_page_created_date'], 'required'],
            [['pageId', 'npw_page_parentId'], 'integer'],
            [['npw_page_description', 'npw_page_remarks'], 'string'],
            [['npw_page_created_date', 'npw_page_updated_date'], 'safe'],
            [['npw_page_slug', 'npw_page_title'], 'string', 'max' => 200],
            [['npw_page_heading'], 'string', 'max' => 400],
            [['npw_page_externalLink'], 'string', 'max' => 45],
            [['npw_page_isPublished', 'npw_page_isUpdated'], 'string', 'max' => 10],
            [['npw_page_slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pageId' => 'Page ID',
            'npw_page_slug' => 'Npw Page Slug',
            'npw_page_parentId' => 'Npw Page Parent ID',
            'npw_page_title' => 'Npw Page Title',
            'npw_page_heading' => 'Npw Page Heading',
            'npw_page_description' => 'Npw Page Description',
            'npw_page_remarks' => 'Npw Page Remarks',
            'npw_page_externalLink' => 'Npw Page External Link',
            'npw_page_created_date' => 'Npw Page Created Date',
            'npw_page_isPublished' => 'Npw Page Is Published',
            'npw_page_updated_date' => 'Npw Page Updated Date',
            'npw_page_isUpdated' => 'Npw Page Is Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNepworldImages()
    {
        return $this->hasMany(NepworldImage::className(), ['npw_image_pageId' => 'pageId']);
    }
}
