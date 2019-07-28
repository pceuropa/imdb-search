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
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Movie'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
                      return  Html::img($m->img_url, ['class' => 'img-thumbnail', 'alt' => $m->title]);
                },
            ],
            'title',
            'year',
            'users_rating',
            'votes',
            'rating',
            //'metascore',
            //'countries',
            //'languages',
            //'actors',
            //'genre',
            //'tagline',
            //'description',
            //'directors',
            'runtime',
            //'imdb_url',
            //'imdb_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
