<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldPage;

/**
 * NepworldPageSearch represents the model behind the search form about `backend\models\NepworldPage`.
 */
class NepworldPageSearch extends NepworldPage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageId', 'npw_page_parentId'], 'integer'],
            [['npw_page_slug', 'npw_page_title', 'npw_page_heading', 'npw_page_description', 'npw_page_remarks', 'npw_page_externalLink', 'npw_page_created_date', 'npw_page_isPublished', 'npw_page_updated_date', 'npw_page_isUpdated'], 'safe'],
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
        $query = NepworldPage::find();

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
            'pageId' => $this->pageId,
            'npw_page_parentId' => $this->npw_page_parentId,
            'npw_page_created_date' => $this->npw_page_created_date,
            'npw_page_updated_date' => $this->npw_page_updated_date,
        ]);

        $query->andFilterWhere(['like', 'npw_page_slug', $this->npw_page_slug])
            ->andFilterWhere(['like', 'npw_page_title', $this->npw_page_title])
            ->andFilterWhere(['like', 'npw_page_heading', $this->npw_page_heading])
            ->andFilterWhere(['like', 'npw_page_description', $this->npw_page_description])
            ->andFilterWhere(['like', 'npw_page_remarks', $this->npw_page_remarks])
            ->andFilterWhere(['like', 'npw_page_externalLink', $this->npw_page_externalLink])
            ->andFilterWhere(['like', 'npw_page_isPublished', $this->npw_page_isPublished])
            ->andFilterWhere(['like', 'npw_page_isUpdated', $this->npw_page_isUpdated]);

        return $dataProvider;
    }
}
