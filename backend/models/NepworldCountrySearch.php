<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldCountry;

/**
 * NepworldCountrySearch represents the model behind the search form about `backend\models\NepworldCountry`.
 */
class NepworldCountrySearch extends NepworldCountry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryId'], 'integer'],
            [['npw_country_slug', 'npw_country_name', 'npw_country_title', 'npw_country_description', 'npw_country_externalLink', 'npw_country_remarks', 'npw_country_created_date', 'npw_country_isPublished', 'npw_country_published_date', 'npw_country_isUpdated', 'npw_country_updated_date'], 'safe'],
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
        $query = NepworldCountry::find();

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
            'countryId' => $this->countryId,
            'npw_country_created_date' => $this->npw_country_created_date,
            'npw_country_published_date' => $this->npw_country_published_date,
        ]);

        $query->andFilterWhere(['like', 'npw_country_slug', $this->npw_country_slug])
            ->andFilterWhere(['like', 'npw_country_name', $this->npw_country_name])
            ->andFilterWhere(['like', 'npw_country_title', $this->npw_country_title])
            ->andFilterWhere(['like', 'npw_country_description', $this->npw_country_description])
            ->andFilterWhere(['like', 'npw_country_externalLink', $this->npw_country_externalLink])
            ->andFilterWhere(['like', 'npw_country_remarks', $this->npw_country_remarks])
            ->andFilterWhere(['like', 'npw_country_isPublished', $this->npw_country_isPublished])
            ->andFilterWhere(['like', 'npw_country_isUpdated', $this->npw_country_isUpdated])
            ->andFilterWhere(['like', 'npw_country_updated_date', $this->npw_country_updated_date]);

        return $dataProvider;
    }
}
