<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldAdvertisement;

/**
 * NepworldAdvertisementSearch represents the model behind the search form about `backend\models\NepworldAdvertisement`.
 */
class NepworldAdvertisementSearch extends NepworldAdvertisement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adId', 'npw_ad_countryId', 'npw_ad_businessId', 'npw_ad_userId'], 'integer'],
            [['npw_ad_slug', 'npw_ad_name', 'npw_ad_title', 'npw_ad_description', 'npw_ad_remarks', 'npw_ad_created_date', 'npw_ad_isPublished', 'npw_ad_published_date', 'npw_ad_isUpdated', 'npw_ad_updated_date'], 'safe'],
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
        $query = NepworldAdvertisement::find();

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
            'adId' => $this->adId,
            'npw_ad_countryId' => $this->npw_ad_countryId,
            'npw_ad_businessId' => $this->npw_ad_businessId,
            'npw_ad_userId' => $this->npw_ad_userId,
            'npw_ad_created_date' => $this->npw_ad_created_date,
            'npw_ad_published_date' => $this->npw_ad_published_date,
            'npw_ad_updated_date' => $this->npw_ad_updated_date,
        ]);

        $query->andFilterWhere(['like', 'npw_ad_slug', $this->npw_ad_slug])
            ->andFilterWhere(['like', 'npw_ad_name', $this->npw_ad_name])
            ->andFilterWhere(['like', 'npw_ad_title', $this->npw_ad_title])
            ->andFilterWhere(['like', 'npw_ad_description', $this->npw_ad_description])
            ->andFilterWhere(['like', 'npw_ad_remarks', $this->npw_ad_remarks])
            ->andFilterWhere(['like', 'npw_ad_isPublished', $this->npw_ad_isPublished])
            ->andFilterWhere(['like', 'npw_ad_isUpdated', $this->npw_ad_isUpdated]);

        return $dataProvider;
    }
}
