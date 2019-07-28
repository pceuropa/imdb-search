<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Movies');
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?>
        <?= Html::a(Yii::t('app', '+'), ['create'], ['class' => 'btn btn-success']) ?>
    </h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'img_url',
                'format' => 'html',
                'value' => function ($m, $key) {
                    $img = Html::img($m->img_url, ['class' => 'img-thumbnail', 'alt' => $m->title]);
                      return Html::a($img, ['movie/view', 'id' => (string)$m->_id]);
                },
            ],
            'title',
            'year',
            'users_rating',
            'votes',
            'rating',
            //'metascore',
            //'countries',
            [
                'attribute' => 'languages',
                'value' => function ($m, $key) {
                      return  $m->languages[0] ?? '';
                },
            ],
            [
                'attribute' => 'actors',
                'value' => function ($m, $key) {
                      return  $m->actors[0] ?? '';
                },
            ],
            [
                'attribute' => 'genre',
                'value' => function ($m, $key) {
                      return  $m->genre[0] ?? '';
                },
            ],
            //'tagline',
            'description',
            //'directors',
            [
                'attribute' => 'directors',
                'format' => 'html',

                'value' => function ($m, $key) {
                      return  $m->directors[0] ?? '';
                },
            ],
            'runtime',
            //'imdb_url',
            //'imdb_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
