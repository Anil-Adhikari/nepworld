<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldContact;

/**
 * NepworldContactSearch represents the model behind the search form about `backend\models\NepworldContact`.
 */
class NepworldContactSearch extends NepworldContact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contactId'], 'integer'],
            [['npw_contact_name', 'npw_contact_email', 'npw_contact_phone', 'npw_contact_address', 'npw_contact_title', 'npw_contact_description', 'npw_contact_created_date', 'npw_contact_isPublished', 'npw_contact_published_date', 'npw_contact_isUpdated', 'npw_contact_updated_date'], 'safe'],
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
        $query = NepworldContact::find();

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
            'contactId' => $this->contactId,
            'npw_contact_created_date' => $this->npw_contact_created_date,
            'npw_contact_published_date' => $this->npw_contact_published_date,
            'npw_contact_updated_date' => $this->npw_contact_updated_date,
        ]);

        $query->andFilterWhere(['like', 'npw_contact_name', $this->npw_contact_name])
            ->andFilterWhere(['like', 'npw_contact_email', $this->npw_contact_email])
            ->andFilterWhere(['like', 'npw_contact_phone', $this->npw_contact_phone])
            ->andFilterWhere(['like', 'npw_contact_address', $this->npw_contact_address])
            ->andFilterWhere(['like', 'npw_contact_title', $this->npw_contact_title])
            ->andFilterWhere(['like', 'npw_contact_description', $this->npw_contact_description])
            ->andFilterWhere(['like', 'npw_contact_isPublished', $this->npw_contact_isPublished])
            ->andFilterWhere(['like', 'npw_contact_isUpdated', $this->npw_contact_isUpdated]);

        return $dataProvider;
    }
}
