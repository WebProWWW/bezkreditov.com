<?php

use app\helpers\Url;
use yii\helpers\ArrayHelper;

$city = ArrayHelper::getValue($this->params, 'city');

?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Отзывы людей прошедших процедуру банкротства в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="my-auto">
                            <h3>Желаете оставить отзыв о компании по банкротству?</h3>
                            <p>Поделитесь информацией о прохождении процедуры банкротства</p>
                        </div>
                    </div><!-- .cart-body -->
                    <a class="btn cart-full-btn" href="<?= Url::to(['site/company-list', 'page' => 1]) ?>">
                        <i class="i-plus cart-full-btn-i"></i>
                        Добавить отзыв
                    </a>
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p class="mt-auto">
                            На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

        </div><!-- .row -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="">Читать все отзывы</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->