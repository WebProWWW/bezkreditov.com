<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Кредиты онлайн на карту';
$this->params['description'] = 'Оформите срочный микрозайм онлайн на карту от МФО, проверенных экспертами &laquo;Без&nbsp;кредитов&raquo;. Для этого вам не придется даже выходить из дома: достаточно выбрать подходящее предложение и подать заявку на займ онлайн.';
$this->params['breadcrumbs'] = ['Потребительские кредиты'];

?>

<section class="section" style="position: relative; overflow: hidden; background: #AEB2B3;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Кредиты онлайн на карту</h1>
                <p class="em-11">
                    На &laquo;Без&nbsp;кредитов&raquo; вы можете взять кредит онлайн на карту на выгодных условиях. На 17.05.2021 представлены 72 предложений от банков России с процентной ставкой от 5.4% до 38%. Сравните кредитные предложения по ключевым параметрам и определитесь в каком банке лучше брать потребительский кредит.
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md-6">
                <img class="img-center" width="530" src="/img/img-53.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <label class="label">Сумма займа, ₽</label>
                <select class="input">
                    <option selected>от 50 000 ₽</option>
                    <option>от 100 000 ₽</option>
                    <option>от 150 000 ₽</option>
                    <option>от 200 000 ₽</option>
                    <option>от 300 000 ₽</option>
                    <option>от 500 000 ₽</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-lg">
                <label class="label">Срок займа</label>
                <select class="input">
                    <option selected>Любой</option>
                    <option>30 дней</option>
                    <option>50 дней</option>
                    <option>90 дней</option>
                    <option>120 дней</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-lg-auto">
                <label class="label d-none d-lg-block">&nbsp;</label>
                <button class="btn-default">Показать</button>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7 active" href="javascript:;">ВСЕ КРЕДИТЫ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">НАЛИЧНЫМИ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">БЕЗ СПРАВОК</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">С ПЛОХОЙ КИ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">ОНЛАЙН-ЗАЯВКА</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">ПОД ЗАЛОГ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">БЕЗ ОТКАЗА</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">КАЛЬКУЛЯТОР</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">ПЕНСИОНЕРАМ</a>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Рекомендуем потребительский кредит на карту на выгодных условиях</h2>

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">Займер</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                            <span class="gray">Займер</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 20 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 36 мес.</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 33% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/1.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">еКапуста</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;5</span>
                            <span class="gray">еКапуста</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 100 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 36 мес.</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 36% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">MoneyMan</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">MoneyMan</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 500 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 3 лет</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 58% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Подобрать кредит онлайн</h2>
        <p>Показано 20 кредитов из 72 доступных</p>

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">Займер</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                            <span class="gray">Займер</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 20 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 36 мес.</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 33% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/1.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">еКапуста</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;5</span>
                            <span class="gray">еКапуста</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 100 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 36 мес.</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 36% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <!-- BANNER -->

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-date"></i>
                        </div>
                        <h3>Узнайте свой кредитный рейтинг</h3>
                        <p class="my-auto pb-3">Один из главных показателей, который оценивается банками при решении о предоставлении займа.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Узнать рейтинг</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-safe"></i>
                        </div>
                        <h3>Защитите свою кредитную историю</h3>
                        <p class="my-auto pb-3">Сервис поможет сберечь от лишних уплат по просрочкам, а также от действий кредитных мошенников.</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Защитить кредит</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-card"></i>
                        </div>
                        <h3>Полная кредитная история</h3>
                        <p class="my-auto pb-3">Информация о ваших кредитах, просрочках, обращениях в банки и МФО</p>
                        <div class="row">
                            <div class="col-auto mx-auto">
                                <p><a class="btn-default" href="javascript:;">Скачать историю</a></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->

        <!-- /BANNER -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('potrebitelskie-kredity-kredit-nalichnymi-v-alfa-banke') ?>">MoneyMan</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">MoneyMan</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 500 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 3 лет</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,3%</p>
                        <p class="gray">Ставка в год</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 58% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="row">
            <div class="col-auto mx-auto">
                <a class="btn-default" href="javascript:;">Показать еще</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stat"></i>
                        </div>
                        <h3>Ставки от 6,9%</h3>
                        <p class="my-auto pb-3">Самые выгодные условия на рынке!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-rub"></i>
                        </div>
                        <h3>Суммы до 5 000 000 рублей</h3>
                        <p class="my-auto pb-3">Кредиты, с которыми можно решать задачи любого масштаба!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-timer"></i>
                        </div>
                        <h3>Рассмотрение от 1 минуты</h3>
                        <p class="my-auto pb-3">Самые выгодные условия на рынке!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Последние отзывы о потребительских кредитах</h2>
        <div class="cart">
            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/0-1.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Кредит «Наличными»</h3>
                        <p>
                            <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            Вячеслав
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>16 мая 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Оставил на сайте заявку на кредит, мне сразу же перезвонили, сказали, какие документы принести в банк. Пришлось брать справку 2-НДФЛ за два года, зато одобрили быстро.</p>
            </div><!-- .cart-body -->

            <div class="divider mb-1"></div>

            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/0.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Кредит «На любые цели - Универсальный»</h3>
                        <p>
                            <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            Сергеев Григорий
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>16 мая 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Заявку на кредит рассмотрели и одобрили быстро. Условия устраивают, процентная ставка не большая. Плачу ежемесячно, в срок, проблем еще ни разу не было.</p>
            </div><!-- .cart-body -->

            <div class="divider mb-1"></div>

            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/0.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Кредит «Наличными»</h3>
                        <p>
                            <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            Шомко Татьяна Петровна
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>16 мая 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Нужны были средства на нормальный Евро-ремонт. Обратилась в Альфа, менеджеры умеют убеждать. Условия были подходящие, оформила кредит, деньги получила быстро. Довольна отношением к клиенту и профессионализмом сотрудников.</p>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body center sm-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>04 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow clip">Лучшие кредиты в день обращения от банков и МФО</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body center sm-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-auto">
                                <img class="img-center" width="70" src="/img/ava-man.svg">
                            </div><!-- .col -->
                            <div class="col-12 col-sm">
                                <h3 class="mb-1">Денис Беневольский</h3>
                                <p>01 дек. 2020</p>
                            </div><!-- .col-12 -->
                        </div><!-- .row -->
                        <h3 class="yellow clip">ТОП 5 банков с лучшими кредитами для зарплатных клиентов</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Как оформить кредит на карту онлайн через &laquo;Без&nbsp;кредитов&raquo;</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
                        </div>
                        <p>Перед оформлением кредита ознакомьтесь с условиями на странице предложения</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-edit"></i>
                        </div>
                        <p>Нажмите на кнопку “Оформить” и заполните анкету на сайте банка</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Онлайн кредит на карту: памятка клиенту</h2>
                <p>Хотя кредит наличными пока остается самым популярным способом кредитования населения, статистика показывает, что все больше людей всех возрастов прибегает к возможности взять кредит онлайн на карту без посещения банка.</p>
                <p>Банки предлагают различные программы кредитования, чтобы помочь заемщикам в различных жизненных ситуациях. Для решения финансовых трудностей можно взять потребительский кредит на карту, обратившись в один из банков, представленных на этой странице. Мы собрали все условия по кредитам в одном месте, а вам осталось лишь внимательно изучить предложения и выбрать условия, которые решат вашу финансовую потребность.</p>
                <h3 class="h1">Как и где можно взять онлайн кредит на карту?</h3>
                <p>Самым простым способом получить кредит онлайн - является подача заявки на этой странице. Это позволяет прямо из дома сравнить кредиты и отправить анкету во все банки, увеличив шансы на получение одобрения в одном из них.</p>
                <h3 class="h1">Как подать онлайн-заявку на кредит на карту?</h3>
                <ul class="ul-circle">
                    <li>Рассмотрите условия кредитования от разных банков на этой странице - сравните процентные ставки по кредитам, срок кредитования, размер ежемесячного платежа, необходимый кредитный рейтинг и другие параметры;</li>
                    <li>Выберите подходящее предложение и отправьте заявку с заполненными данными;</li>
                    <li>Получите предварительное решение по кредиту через несколько минут;</li>
                    <li>Если заявка будет одобрена, то с вами свяжется представитель банка и сообщит о дальнейших действиях.</li>
                </ul>
                <div class="wall px-sm-4" style="min-height: auto;">
                    <p><strong>Важно!</strong> Необходимо использовать только проверенные сайты, чтобы ваши данные не оказались в руках мошенников. Наш сайт предлагает только проверенные предложения от действующих и проверенных организаций, что гарантирует безопасность для клиента.</p>
                </div>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Популярные предложения</h2>
                <h3>Выберите кредит</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">По 2 документам без справок</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С плохой КИ</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Неработающим</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Без отказа</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Наличными</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С минимальной процентной ставкой</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Большие суммы</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На 1 000 000 рублей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На 500 000 рублей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На 300 000 рублей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На 250 000 рублей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На 1 500 000 рублей</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Лучшие кредиты</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Без поручителей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С 18 лет</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">По двум документам</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На один год</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Образовательный кредит</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->