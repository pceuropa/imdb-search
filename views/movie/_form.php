<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'rating') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'users_rating') ?>

    <?= $form->field($model, 'votes') ?>

    <?= $form->field($model, 'metascore') ?>

    <?= $form->field($model, 'img_url') ?>

    <?= $form->field($model, 'countries') ?>

    <?= $form->field($model, 'languages') ?>

    <?= $form->field($model, 'actors') ?>

    <?= $form->field($model, 'genre') ?>

    <?= $form->field($model, 'tagline') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'directors') ?>

    <?= $form->field($model, 'runtime') ?>

    <?= $form->field($model, 'imdb_url') ?>

    <?= $form->field($model, 'imdb_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
