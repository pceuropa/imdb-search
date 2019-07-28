<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

    NavBar::begin([
      'brandLabel' => 'Imdb Movies',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-default',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],

        'items' => [
            ['label' => 'Movies', 'url' => ['/movie/index'], 'visible' => !Yii::$app->user->isGuest],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);

    NavBar::end();
