<?php

use app\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$city = ArrayHelper::getValue($this->params, 'city');

?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Онлайн сервис подбора специалистов по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body" style="height: 100%;">
                        <h3 class="em-13">Подбор юриста по банкротству</h3>
                        <div class="row no-gutters" style="height: 100%;">
                            <div class="col-12 col-sm">
                                <div class="d-flex flex-column" style="height: 100%; position: relative;">
                                    <p class="em-9">Удобный сервис подбора юриста по банкротству в вашем регионе. Быстро, бесплатно, надежно.</p>
                                    <p class="em-9 mt-auto mb-5">Больше 50 предложений от юридических компаний</p>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="percent-circle" style="width: 60px">
                                                <span data-circle-percent="95"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Количество<br>успешных&nbsp;дел</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="em-13 center" style="width: 60px">
                                                <i class="i-star primary"></i> 10
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0 my-4">
                                            <a class="btn-default" href="<?= Url::toView('servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits') ?>">Попробовать</a>
                                        </div>
                                    </div>
                                </div><!-- .d-flex -->
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-5 col-xl-6 align-self-end mx-auto">
                                <div class="px-5 px-sm-0">
                                    <img class="img-center" src="/img/w-img-1.jpg" style="margin-bottom: -3px; margin-top: -3px;">
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body" style="height: 100%;">
                        <h3 class="em-13">Подбор финансового управляющего</h3>
                        <div class="row no-gutters" style="height: 100%;">
                            <div class="col-12 col-sm">
                                <div class="d-flex flex-column" style="height: 100%; position: relative;">
                                    <p class="em-9">Удобный сервис подбора финансового управляющего в вашем регионе для ведения процедуры банкротства.</p>
                                    <p class="em-9 mt-auto mb-5">Больше 70 предложений от финансовых управляющих</p>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="percent-circle" style="width: 60px">
                                                <span data-circle-percent="93"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Количество<br>успешных&nbsp;дел</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="em-13 center" style="width: 60px">
                                                <i class="i-star primary"></i> 9.5
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0 my-4">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">Попробовать</a>
                                        </div>
                                    </div>
                                </div><!-- .d-flex -->
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-5 col-xl-6 align-self-end mx-auto">
                                <div class="px-5 px-sm-0">
                                    <img class="img-center" src="/img/w-img-2.jpg" style="margin-bottom: -3px; margin-top: -3px;">
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->