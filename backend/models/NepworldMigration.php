<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nepworld_migration".
 *
 * @property integer $migrationId
 * @property string $npw_migration_version
 * @property integer $apply_time
 */
class NepworldMigration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nepworld_migration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['migrationId'], 'required'],
            [['migrationId', 'apply_time'], 'integer'],
            [['npw_migration_version'], 'string', 'max' => 180],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'migrationId' => 'Migration ID',
            'npw_migration_version' => 'Npw Migration Version',
            'apply_time' => 'Apply Time',
        ];
    }
}
