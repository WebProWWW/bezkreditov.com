<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Полезные онлайн-сервисы от портала «Без кредитов»';

$this->params['description'] = 'С помощью онлайн-сервисов вы сможете рассчитать стоимость банкротства, узнать свои долги, проконсультироваться с юристом';

$this->params['breadcrumbs'] = [
    'Онлайн&nbsp;-&nbsp;сервисы',
];

?>
<section class="section img-c-bg">
    <div class="container relative z-1">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-8">
                <h1>
                Полезные онлайн&nbsp;-&nbsp;сервисы
                <br>
                от&nbsp;портала «Без&nbsp;кредитов»
            </h1>
                <p class="em-13">С помощью онлайн-сервисов вы сможете рассчитать стоимость банкротства, узнать свои долги, проконсультироваться с юристом</p>
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mx-auto align-self-end">
                <div class="img-c-wrap">
                    <img class="img-c" src="/img/img-2.jpg">
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->
<section class="section bg">
    <div class="container">
        <h2 class="center">Онлайн-сервисы портала «Без кредитов»</h2>
        <div class="row">
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/report_analysis__monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Онлайн подбор юриста по банкротству</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/credit_card_monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Кредитный калькулятор</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/calculator.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Калькулятор рефинансирования</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/calendar.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Ипотечный калькулятор</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/accountant.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Онлайн калькулятор по банкротству</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'kalkulyator-stoimosti-bankrotstva']) ?>">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-6">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/consulting.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Онлайн консультация по банкротству</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-3">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/quality_check.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12">
                                <p class="center">Проверка долгов онлайн</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-6">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/checklist_.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Онлайн тест на списание долгов, кредитов</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-6">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/wallet_monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Проверка и оплата штрафов ГИБДД</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/transaction__monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Налоги: проверка и оплата онлайн</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/coins_monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Калькулятор налога с продажи квартиры</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="mb-4 col-12 col-md-4 col-lg-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center my-auto">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <img class="img-center" width="200" height="200" src="/img/icon-svg/revenue__monochromatic.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <p class="center">Калькулятор пеней и штрафов</p>
                                <div class="row">
                                    <div class="col-auto mx-auto">
                                        <a class="btn-sm btn-default" href="">Попробовать</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->