<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldAlbum;

/**
 * NepworldAlbumSearch represents the model behind the search form about `backend\models\NepworldAlbum`.
 */
class NepworldAlbumSearch extends NepworldAlbum
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['albumId'], 'integer'],
            [['npw_album_name', 'npw_album_description', 'npw_album_created_date', 'npw_album_isUpdated', 'npw_album_updated_date'], 'safe'],
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
        $query = NepworldAlbum::find();

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
            'albumId' => $this->albumId,
            'npw_album_created_date' => $this->npw_album_created_date,
        ]);

        $query->andFilterWhere(['like', 'npw_album_name', $this->npw_album_name])
            ->andFilterWhere(['like', 'npw_album_description', $this->npw_album_description])
            ->andFilterWhere(['like', 'npw_album_isUpdated', $this->npw_album_isUpdated])
            ->andFilterWhere(['like', 'npw_album_updated_date', $this->npw_album_updated_date]);

        return $dataProvider;
    }
}
