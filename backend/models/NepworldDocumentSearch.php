<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldDocument;

/**
 * NepworldDocumentSearch represents the model behind the search form about `backend\models\NepworldDocument`.
 */
class NepworldDocumentSearch extends NepworldDocument
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['docId', 'npw_doc_countryId'], 'integer'],
            [['npw_doc_slug', 'npw_doc_name', 'npw_doc_title', 'npw_doc_description', 'npw_doc_externalLink', 'npw_doc_created_date', 'npw_doc_documentForCountry', 'npw_doc_isPublished', 'npw_doc_published_date', 'npw_doc_isUpdated', 'npw_doc_updated_date'], 'safe'],
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
        $query = NepworldDocument::find();

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
            'docId' => $this->docId,
            'npw_doc_countryId' => $this->npw_doc_countryId,
            'npw_doc_created_date' => $this->npw_doc_created_date,
            'npw_doc_published_date' => $this->npw_doc_published_date,
            'npw_doc_updated_date' => $this->npw_doc_updated_date,
        ]);

        $query->andFilterWhere(['like', 'npw_doc_slug', $this->npw_doc_slug])
            ->andFilterWhere(['like', 'npw_doc_name', $this->npw_doc_name])
            ->andFilterWhere(['like', 'npw_doc_title', $this->npw_doc_title])
            ->andFilterWhere(['like', 'npw_doc_description', $this->npw_doc_description])
            ->andFilterWhere(['like', 'npw_doc_externalLink', $this->npw_doc_externalLink])
            ->andFilterWhere(['like', 'npw_doc_documentForCountry', $this->npw_doc_documentForCountry])
            ->andFilterWhere(['like', 'npw_doc_isPublished', $this->npw_doc_isPublished])
            ->andFilterWhere(['like', 'npw_doc_isUpdated', $this->npw_doc_isUpdated]);

        return $dataProvider;
    }
}
