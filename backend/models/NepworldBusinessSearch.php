<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldBusiness;

/**
 * NepworldBusinessSearch represents the model behind the search form about `backend\models\NepworldBusiness`.
 */
class NepworldBusinessSearch extends NepworldBusiness
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['businessId', 'npw_business_countryId', 'npw_business_userId'], 'integer'],
            [['npw_business_slug', 'npw_business_name', 'npw_business_address', 'npw_business_description', 'npw_business_type', 'npw_business_remarks', 'npw_business_map', 'npw_business_created_date', 'npw_business_isPublished', 'npw_business_published_date', 'npw_business_isUpdated', 'npw_business_updated_date'], 'safe'],
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
        $query = NepworldBusiness::find();

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
            'businessId' => $this->businessId,
            'npw_business_countryId' => $this->npw_business_countryId,
            'npw_business_userId' => $this->npw_business_userId,
            'npw_business_created_date' => $this->npw_business_created_date,
            'npw_business_published_date' => $this->npw_business_published_date,
            'npw_business_updated_date' => $this->npw_business_updated_date,
        ]);

        $query->andFilterWhere(['like', 'npw_business_slug', $this->npw_business_slug])
            ->andFilterWhere(['like', 'npw_business_name', $this->npw_business_name])
            ->andFilterWhere(['like', 'npw_business_address', $this->npw_business_address])
            ->andFilterWhere(['like', 'npw_business_description', $this->npw_business_description])
            ->andFilterWhere(['like', 'npw_business_type', $this->npw_business_type])
            ->andFilterWhere(['like', 'npw_business_remarks', $this->npw_business_remarks])
            ->andFilterWhere(['like', 'npw_business_map', $this->npw_business_map])
            ->andFilterWhere(['like', 'npw_business_isPublished', $this->npw_business_isPublished])
            ->andFilterWhere(['like', 'npw_business_isUpdated', $this->npw_business_isUpdated]);

        return $dataProvider;
    }
}
