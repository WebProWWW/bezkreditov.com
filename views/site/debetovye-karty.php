<?php

use app\assets\MainAsset;

/* @var $this yii\web\View */

$this->title = 'Дебетовые карты';
$this->params['description'] = 'На Без кредитов можно узнать где оформить дебетовую карту, так как здесь собраны лучшие банковские карты, на которые можно подать заявку в два клика онлайн. Сравните условия дебетовых карт и подберите наиболее выгодное предложение!';
$this->params['breadcrumbs'] = ['Дебетовые карты'];

$jsFile = '/js/vue-app-debit-card.min.js?v=001&rnd='.Yii::$app->security->generateRandomString(5);

$this->registerJsFile($jsFile, [
    'depends' => MainAsset::class,
]);

?>
<section class="section" style="position: relative; overflow: hidden; background: #C4C9DD;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Дебетовые карты</h1>
                <p class="em-11">
                    На &laquo;Без&nbsp;кредитов&raquo; можно узнать где оформить дебетовую карту, 
                    так как здесь собраны лучшие банковские карты, на которые 
                    можно подать заявку в два клика онлайн. Сравните условия 
                    дебетовых карт и подберите наиболее выгодное предложение!
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md-6">
                <img class="img-center" width="400" src="/img/img-49.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<div class="js-app-debit-card"></div>