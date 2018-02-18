<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NepworldImage;

/**
 * NepworldImageSearch represents the model behind the search form about `backend\models\NepworldImage`.
 */
class NepworldImageSearch extends NepworldImage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageId', 'npw_image_pageId', 'npw_image_countryId', 'npw_image_businessId', 'npw_image_adId', 'npw_image_docId', 'npw_image_albumId', 'npw_image_contactId', 'npw_image_userId'], 'integer'],
            [['npw_image_name', 'npw_imageUrl', 'npw_image_caption', 'npw_image_description', 'npw_image_uploaded_date'], 'safe'],
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
        $query = NepworldImage::find();

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
            'imageId' => $this->imageId,
            'npw_image_pageId' => $this->npw_image_pageId,
            'npw_image_countryId' => $this->npw_image_countryId,
            'npw_image_businessId' => $this->npw_image_businessId,
            'npw_image_adId' => $this->npw_image_adId,
            'npw_image_docId' => $this->npw_image_docId,
            'npw_image_albumId' => $this->npw_image_albumId,
            'npw_image_contactId' => $this->npw_image_contactId,
            'npw_image_userId' => $this->npw_image_userId,
            'npw_image_uploaded_date' => $this->npw_image_uploaded_date,
        ]);

        $query->andFilterWhere(['like', 'npw_image_name', $this->npw_image_name])
            ->andFilterWhere(['like', 'npw_imageUrl', $this->npw_imageUrl])
            ->andFilterWhere(['like', 'npw_image_caption', $this->npw_image_caption])
            ->andFilterWhere(['like', 'npw_image_description', $this->npw_image_description]);

        return $dataProvider;
    }
}
