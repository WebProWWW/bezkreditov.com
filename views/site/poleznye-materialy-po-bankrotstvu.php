<?php

use yii\helpers\Url;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Полезные материалы по банкротству в г. '.$city->name;

$this->params['description'] = $this->title;

$this->params['breadcrumbs'] = [
    'Полезные материалы по банкротству в&nbsp;г.&nbsp;'.$city->name,
];

?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></h1>

        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения к административной...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит, было все безоблачно. Платил исправно. ...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения к административной...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит, было все безоблачно. Платил исправно. ...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения к административной...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит, было все безоблачно. Платил исправно. ...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения к административной...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит, было все безоблачно. Платил исправно. ...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="img/cart.jpg">
                    </div>
                    <div class="cart-body">
                        <h4>Должник выплатил алиментный долг после привлечения к административной...</h4>
                        <p>«Не думал что меня когда-нибудь коснется эта проблема. Когда брал потребительский кредит, было все безоблачно. Платил исправно. ...»</p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

        </div><!-- .row -->

        <div class="row justify-content-center my-3">
            <div class="col-auto">
                <?= LinkPager::widget([
                    'pagination' => new yii\data\Pagination(['totalCount' => 100]),
                ]) ?>
            </div>
        </div>

    </div><!-- .container -->
</section><!-- .section -->