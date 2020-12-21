<?php

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Сервис персонального подбора юриста по банкротству в г. Москва';

$this->params['description'] = 'Бесплатный и удобный подбор проверенного юриста по банкротству в вашем городе';

$this->params['breadcrumbs'] = [
    'Подбор юриста по банкротству в&nbsp;г.&nbsp;'.$city->name,
];

?>
<section class="section bg">
    <div class="container">

        <div class="center">
            <h1>Сервис персонального подбора юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></h1>
            <p>Бесплатный и удобный подбор проверенного юриста по банкротству в вашем городе</p>
        </div>

        <div class="mb-4">
            <div class="cart">
                <div class="cart-body p-xl-4 pt-xl-5">
                    <div class="row justify-content-around">
                        <div class="col-12 col-lg-6 col-xl-4">
                            <label class="label">Общий размер долга</label>
                            <input class="input" type="text">

                            <label class="label">Регион проживания (прописки)</label>
                            <select class="input">
                                <option>Москва и Московская область</option>
                            </select>

                            <label class="label">Колличество кредитов, распиcок, поручительств</label>
                            <input class="input" type="text">
                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 col-xl-6">
                            <span class="label d-none d-xl-block">&nbsp;</span>
                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Залоговое имущество, которое нужно продать (в том числе ипотечное):</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio radio-sm" type="radio" name="radio-111">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio radio-sm" type="radio" name="radio-111">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Несовершеннолетние дети:</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio radio-sm" type="radio" name="radio-222">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio radio-sm" type="radio" name="radio-222">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Крупные сделки последние три года:</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Есть</span>
                                                <input class="radio radio-sm" type="radio" name="radio-333">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio radio-sm" type="radio" name="radio-333">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->

                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-sm">
                                    <p class="em-9 mb-2">Расчитываете на рассрочку по&nbsp;банкротству:</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto mb-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Да</span>
                                                <input class="radio radio-sm" type="radio" name="radio-666">
                                            </label>
                                        </div><!-- .col -->
                                        <div class="col-auto">
                                            <label class="d-flex align-items-center m-0">
                                                <span class="d-block mr-3">Нет</span>
                                                <input class="radio radio-sm" type="radio" name="radio-666">
                                            </label>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-auto mx-auto">
                            <div class="btn-default">Подобрать юриста</div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .mb-4 -->
    </div><!-- .container -->
</section><!-- .section -->