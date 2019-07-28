<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movie;

/**
 * MovieSearch represents the model behind the search form of `app\models\Movie`.
 */
class MovieSearch extends Movie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'title', 'rating', 'year', 'users_rating', 'votes', 'metascore', 'img_url', 'countries', 'languages', 'actors', 'genre', 'tagline', 'description', 'directors', 'runtime', 'imdb_url', 'imdb_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Movie::find();

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
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'rating', $this->rating])
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'users_rating', $this->users_rating])
            ->andFilterWhere(['like', 'votes', $this->votes])
            ->andFilterWhere(['like', 'metascore', $this->metascore])
            ->andFilterWhere(['like', 'img_url', $this->img_url])
            ->andFilterWhere(['like', 'countries', $this->countries])
            ->andFilterWhere(['like', 'languages', $this->languages])
            ->andFilterWhere(['like', 'actors', $this->actors])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'tagline', $this->tagline])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'directors', $this->directors])
            ->andFilterWhere(['like', 'runtime', $this->runtime])
            ->andFilterWhere(['like', 'imdb_url', $this->imdb_url])
            ->andFilterWhere(['like', 'imdb_id', $this->imdb_id]);

        return $dataProvider;
    }
}
