<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Займы онлайн на карту';
$this->params['description'] = 'Оформите срочный микрозайм онлайн на карту от МФО, проверенных экспертами &laquo;Без&nbsp;кредитов&raquo;. Для этого вам не придется даже выходить из дома: достаточно выбрать подходящее предложение и подать заявку на займ онлайн.';
$this->params['breadcrumbs'] = ['Микрозаймы'];

?>

<section class="section bg" style="position: relative; overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Займы онлайн на карту</h1>
                <p class="em-11">
                    Оформите срочный микрозайм онлайн на карту от МФО, проверенных экспертами &laquo;Без&nbsp;кредитов&raquo;. Для этого вам не придется даже выходить из дома: достаточно выбрать подходящее предложение и подать заявку на займ онлайн.
                </p>
                <p>
                    Количество микрозаймов на 17.05.2021 — 80 микрозаймов со ставкой от 0% в день. 
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-center" width="490" src="/img/img-37.jpg" style="margin-bottom: -11px;">
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
            <div class="col-12 col-md-6 col-lg-auto">
                <label class="label d-none d-lg-block">&nbsp;</label>
                <button class="btn-default">Показать</button>
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-auto">
                <label class="label d-none d-lg-block">&nbsp;</label>
                <button class="btn-trsp">Деньги срочно</button>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8 active" href="javascript:;">ВСЕ МИКРОЗАЙМЫ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">СРОЧНО</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">БЕЗ ОТКАЗА</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">КАЛЬКУЛЯТОР ЗАЙМОВ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">БЕЗ ПРОЦЕНТОВ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">ПОД ЗАЛОГ ПТС</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">КРУГЛОСУТОЧНЫЕ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">ДО ЗАРПЛАТЫ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">БЕЗ ПАСПОРТА</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">С ПЛОХОЙ ИСТОРИЕЙ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-8" href="javascript:;">АБСОЛЮТНО ВСЕМ</a>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Рекомендуем популярные микрозаймы на выгодных условиях</h2>

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">Займер</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                            <span class="gray">Займер</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 2 000 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 7 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-1" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-1" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/1.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">еКапуста</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;5</span>
                            <span class="gray">еКапуста</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 100 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 7 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-2" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-2" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-2 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">MoneyMan</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">MoneyMan</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 1 500 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 5 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-3" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-3" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-3 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Подобрать микрозайм и получить деньги за 15 минут</h2>
        <p>Показано 20 займов из 80 доступных</p>

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">Займер</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                            <span class="gray">Займер</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 2 000 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 7 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-4" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-4" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-4 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/1.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">еКапуста</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;5</span>
                            <span class="gray">еКапуста</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 100 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 7 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-5" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-5" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-5 -->
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
                        <a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('mikrozajmy-mikrozajm-ekapusta') ?>">MoneyMan</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">MoneyMan</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 1 500 ₽</p>
                        <p class="gray">Сумма займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 5 дней</p>
                        <p class="gray">Срок займа</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 0,0%</p>
                        <p class="gray">Ставка в день</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-6" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
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
                <div id="more-info-card-6" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-6 -->
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
                            <i class="i-rub"></i>
                        </div>
                        <h3>Суммы до 500 000 рублей на карту</h3>
                        <p class="my-auto pb-3">Сотни тысяч рублей, не выходя из дома!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stat"></i>
                        </div>
                        <h3>Более 20 предложений под 0%</h3>
                        <p class="my-auto pb-3">Берите деньги и не переплачивайте МФО ни рубля!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-checked"></i>
                        </div>
                        <h3>До 100% одобрения</h3>
                        <p class="my-auto pb-3">Деньги может получить каждый - от студента до пенсионера!</p>
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
                <h2 class="h1">Займ на карту: что важно знать, чтобы быстро получить деньги</h2>
                <p><strong>Займы онлайн на карту</strong> — это микрокредит, который МФО или МКК выдает заемщику переводом на кредитную или дебетовую карту. Данный способ стал отличным решением финансовых проблем для многих россиян благодаря тому, что деньги в долг можно получить круглосуточно и с быстрым рассмотрением .</p>
                <h3 class="h1">Плюсы и минусы микрозаймов</h3>
                <h4>Преимущества микрозаймов через Интернет:</h4>
                <ul class="ul-circle">
                    <li>Оформление полностью онлайн, поэтому вы можете получить деньги даже не выходя из дома;</li>
                    <li>Деньги поступают на карту мгновенно, а все оформление занимает не более 15 минут;</li>
                    <li>Для оформления требуется минимальное количество документов, чаще всего необходим только паспорт;</li>
                    <li>Полученные деньги можно снять с карты или использовать для безналичных трат. Оплачивать можно любые покупки в обычных магазинах и в Интернете;</li>
                    <li>Деньги можно получить даже с плохой кредитной историей.</li>
                </ul>
                <h4>Однако у онлайн займов есть и минусы:</h4>
                <ul class="ul-circle">
                    <li>Микрокредит должен быть погашен в срок, оговоренный в договоре (иначе могут применены штрафные санкции);</li>
                    <li>Не все карты подходят под заем. Если у вас неименная карта Visa Electron или Maestro, карточка Золотой Короны или виртуальная карта (Киви, ЮMoney и другие, используемые для покупок в Интернете), то с большой вероятностью вам будет отказано в получение займа;</li>
                    <li>Ограничение по сумме. Обычно микрофинансовые организации предлагают займы до 100 000 рублей (для получения более крупной суммы, лучше подать онлайн заявку на потребительский кредит)</li>
                </ul>
                <h3 class="h1">Условия получения займов</h3>
                <h4>Чтобы срочно взять займ онлайн, необходимо соответствовать следующим требованиям:</h4>
                <ul class="ul-circle">
                    <li>Постоянная регистрация на территории Российской Федерации;</li>
                    <li>На момент оформления микрозайма, вы должны быть старше 18 лет, а на момент возврата долга — младше 75 лет;</li>
                    <li>У вас должна быть не просроченная дебетовая, зарплатная или пенсионная карта Visa или Mastercard, оформленная в любом российском банке на ваше имя;</li>
                    <li>У вас не должно быть невыполненных обязательств или просрочек в выбранной микрофинансовой организации.</li>
                </ul>
                <div class="wall px-sm-4">
                    <p>Важным преимуществом МФО и МКК переда банками является то, что требований к клиенту не так много и получить деньги на пластиковую карточку не сложно. Кроме того, вам не придется представлять многочисленные справки о доходах, зарплате, наличии имущества и др. Онлайн заявка будет рассмотрена максимально быстро, иногда в течение нескольких минут, и очень вероятно, что она будет одобрена — случаев отказа в МФО мало.</p>
                </div>
                <h3 class="h1">Как оформляется займ на карту онлайн?</h3>
                <p>Эксперты &laquo;Без&nbsp;кредитов&raquo; собрали различные предложения от надежных и популярных микрофинансовых организаций. Вам необходимо указать необходимую сумму и срок займа, изучить процентные ставки, срок погашения долга, время рассмотрения заявки и другие параметры.</p>
                <p>Дополнительными ориентирами для заемщика могут служить такие критерии, как процент одобрения микрокредитов организацией, вероятность одобрения заявки конкретно вами и отзывы пользователей. Чтобы найти подходящее предложение, можно воспользоваться калькулятором для расчета микрозаймов.</p>
                <p><strong>Для подачи онлайн-заявки, следуйте следующей инструкции:</strong></p>
                <ul class="ul-circle">
                    <li>выберите подходящее предложение и нажмите на кнопку «Оформить»;</li>
                    <li>на открывшемся сайте выбранной МФО, заполните анкету и отправьте заявку на займ онлайн с заполненными данными;</li>
                    <li>подпишите договор с помощью отправки специального кода через SMS.</li>
                </ul>
                <p><strong>В случае одобрения микрокредита, деньги на карту поступают мгновенно.</strong></p>
                <h3 class="h1">Список документов для оформления займа</h3>
                <p>При оформлении микрозайма нужен только российский паспорт, однако наличие дополнительных документов (СНИЛС, ИНН, водительское удостоверение) может существенно повысить шанс одобрения займа.</p>
                <p>Для получения денег на карту, необходимо предоставить номер банковской карты, на которую следует перечислить деньги, обозначить срок ее действия, имя и фамилию держателя карты, а также CVV2 или CVC2 код.</p>
                <div class="wall px-sm-4" style="min-height: auto;">
                    <p><strong>Важно!</strong> Имя и фамилия в заявке, в паспорте и на карте должны совпадать, чтобы получить займ без отказа.</p>
                </div>
                <h3 class="h1">Как погасить займы, взятые онлайн</h3>
                <p><strong>Обычно микрофинансовые организации предлагают несколько способов возврата денежного займа:</strong></p>
                <ul class="ul-circle">
                    <li>переводом с карты;</li>
                    <li>наличными деньгами, используя для этого платежную систему типа Contact;</li>
                    <li>через QIWI-кошелек;</li>
                    <li>наличными через салоны связи (Связной, Элекснет и т.д.);</li>
                    <li>через терминал.</li>
                </ul>
                <p>Проводите платежи согласно графику погашения и старайтесь их не задерживать, чтобы избежать начисления дополнительных процентов.</p>
                <h3 class="h1">Займы на карту</h3>
                <p>Онлайн займ на карту - это краткосрочный микрокредит, в рамках которого деньги переводятся заёмщику на банковскую карту.</p>
                <h3 class="h1">Преимущества займа на карту</h3>
                <ul class="ul-circle">
                    <li>Быстрое оформление заявки и получение денег. Необходим только паспорт, а весь процесс от подачи заявки до выдачи денег занимает не более 30 минут.</li>
                    <li>Получить деньги можно круглосуточно и без выходных. Таким образом вы можете в любое время решить свою финансовую проблему.</li>
                    <li>Оформление без посещения офиса организации (и даже не выходя из дома). Процедура подачи заявки и получения денег проходит онлайн.</li>
                </ul>
                <br>
                <h3 class="h1 center">Какая карточка подходит?</h3>
                <p class="center">Не все карты подходят для оформления займа - обычно не принимаются неизменные карты VISA и виртуальные карты, которые используются только для оплаты в Интернете.</p>
                <p class="center"><strong>Чтобы убедиться, что ваша карта подходит - посмотрите на наличие следующих элементов:</strong></p>
                <img class="img-center" width="700" src="/img/img-34.svg">
                <br>
                <h3 class="h1 center">Недостатки займа на карту</h3>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-9 col-md-6 col-xl-4 mb-4">
                        <img class="img-center" width="120" src="/img/num-circle-1.svg" style="margin-bottom: -10%">
                        <div class="bg-primary" style="padding: 13% 15px 1px">
                            <p class="center">
                                Сложно получить займ <br>наличными деньгами
                            </p>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-6 col-xl-4 mb-4">
                        <img class="img-center" width="120" src="/img/num-circle-2.svg" style="margin-bottom: -10%">
                        <div class="bg-primary" style="padding: 13% 15px 1px">
                            <p class="center">
                                Не все банковские карты <br>подходят для получения займа
                            </p>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-6 col-xl-4 mb-4">
                        <img class="img-center" width="120" src="/img/num-circle-3.svg" style="margin-bottom: -10%">
                        <div class="bg-primary" style="padding: 13% 15px 1px">
                            <p class="center">
                                Есть риск получить штрафные <br>санкции за просрочку
                            </p>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <br>
                <h3 class="h1 center">Как обезопасить свою карту?</h3>
                <p class="center">Придерживайтесь следующим правилам:</p>
                <img class="img-center" width="780" src="/img/img-35.svg">
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Популярные предложения</h2>
                <h3>Популярные займы</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С плохой кредитной историей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С автоматическим одобрением</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Займ без процентов</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Круглосуточно</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">По номеру карты</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Получение займа</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На Яндекс Деньги</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На Юmoney</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Без проверок</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На Киви</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">На карту без отказа</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">За 5 минут</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Категория заёмщика</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Безработным</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Студентам</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С 18 лет</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Для пенсионеров</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Для граждан СНГ</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Займ без паспорта</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Лучшие условия</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Автокредит</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Дебетовые карты</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Займы онлайн на карту</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Кредитные карты</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Ипотека</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Кредит онлайн</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->