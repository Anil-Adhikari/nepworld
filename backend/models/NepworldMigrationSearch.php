<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldMigration;

/**
 * NepworldMigrationSearch represents the model behind the search form about `backend\models\NepworldMigration`.
 */
class NepworldMigrationSearch extends NepworldMigration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['migrationId', 'apply_time'], 'integer'],
            [['npw_migration_version'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NepworldMigration::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'migrationId' => $this->migrationId,
            'apply_time' => $this->apply_time,
        ]);

        $query->andFilterWhere(['like', 'npw_migration_version', $this->npw_migration_version]);

        return $dataProvider;
    }
}
