<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "movie".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $title
 * @property mixed $rating
 * @property mixed $year
 * @property mixed $users_rating
 * @property mixed $votes
 * @property mixed $metascore
 * @property mixed $img_url
 * @property mixed $countries
 * @property mixed $languages
 * @property mixed $actors
 * @property mixed $genre
 * @property mixed $tagline
 * @property mixed $description
 * @property mixed $directors
 * @property mixed $runtime
 * @property mixed $imdb_url
 * @property mixed $imdb_id
 */
class Movie extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['imdb', 'movie'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'title',
            'rating',
            'year',
            'users_rating',
            'votes',
            'metascore',
            'img_url',
            'countries',
            'languages',
            'actors',
            'genre',
            'tagline',
            'description',
            'directors',
            'runtime',
            'imdb_url',
            'imdb_id',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'rating', 'year', 'users_rating', 'votes', 'metascore', 'img_url', 'countries', 'languages', 'actors', 'genre', 'tagline', 'description', 'directors', 'runtime', 'imdb_url', 'imdb_id'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'rating' => Yii::t('app', 'Rating'),
            'year' => Yii::t('app', 'Year'),
            'users_rating' => Yii::t('app', 'Users Rating'),
            'votes' => Yii::t('app', 'Votes'),
            'metascore' => Yii::t('app', 'Metascore'),
            'img_url' => Yii::t('app', 'Img Url'),
            'countries' => Yii::t('app', 'Countries'),
            'languages' => Yii::t('app', 'Languages'),
            'actors' => Yii::t('app', 'Actors'),
            'genre' => Yii::t('app', 'Genre'),
            'tagline' => Yii::t('app', 'Tagline'),
            'description' => Yii::t('app', 'Description'),
            'directors' => Yii::t('app', 'Directors'),
            'runtime' => Yii::t('app', 'Runtime'),
            'imdb_url' => Yii::t('app', 'Imdb Url'),
            'imdb_id' => Yii::t('app', 'Imdb ID'),
        ];
    }
}
