<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Movies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="movie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>


<div class="row">
  <div class="col-md-3"> <?= html::img($model->img_url, ['class' => 'img-fluid img-responsive']) ?></div>
  <div class="col-md-9">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'title',
            'rating',
            'year',
            'users_rating',
            'votes',
            'metascore',
            'img_url',
            //'countries',
            //'languages',
            //'actors',
            //'genre',
            'tagline',
            'description',
            //'directors',
            'runtime',
            'imdb_url',
            'imdb_id',
        ],
    ]) ?>


</div>
</div>



</div>
