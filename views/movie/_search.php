<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'rating') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'users_rating') ?>

    <?php // echo $form->field($model, 'votes') ?>

    <?php // echo $form->field($model, 'metascore') ?>

    <?php // echo $form->field($model, 'img_url') ?>

    <?php // echo $form->field($model, 'countries') ?>

    <?php // echo $form->field($model, 'languages') ?>

    <?php // echo $form->field($model, 'actors') ?>

    <?php // echo $form->field($model, 'genre') ?>

    <?php // echo $form->field($model, 'tagline') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'directors') ?>

    <?php // echo $form->field($model, 'runtime') ?>

    <?php // echo $form->field($model, 'imdb_url') ?>

    <?php // echo $form->field($model, 'imdb_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
