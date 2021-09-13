<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Ипотека без первоначального взноса';
$this->params['description'] = 'Интересует жилье в ипотеку без первоначального взноса? «Без кредитов» собрал лучшие предложения по ипотечному кредитованию без первоначального взноса на первичное и вторичное жилье';
$this->params['breadcrumbs'] = [
    [
        'label' => 'Ипотека',
        'url' => ['site/index', 'view' => 'ipoteka'],
    ],
    'Без первоначального взноса'
];

?>

<section class="section" style="position: relative; overflow: hidden; background: #FDE539">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-xl-4">
                <h1>Ипотека без первоначального взноса</h1>
                <p class="em-11">Интересует жилье в ипотеку без первоначального взноса? «Без кредитов» собрал лучшие предложения по ипотечному кредитованию без первоначального взноса на первичное и вторичное жилье</p>
            </div><!-- .col -->
            <div class="col-12 col-md align-self-end">
                <img class="img-center" width="650" src="/img/img-47.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <label class="label">Сумма кредита, ₽</label>
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
                <label class="label">Срок кредита</label>
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
        <h2 class="h1">Подобрать ипотеку по параметрам</h2>
        <div class="row">
            <div class="col-12 col-md-auto">
                <p>Показано 20 ипотечных кредитов из 94 доступных</p>
            </div><!-- .col -->
            <div class="col-12 col-md-auto ml-auto">
                <p>
                    <a href="javascript:;">
                        <i class="i-stat em-8"></i> По умолчанию <i class="i-down em-8"></i>
                    </a>
                </p>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">Льготная ипотека «Господдержка-2020»</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4</span>
                            <span class="gray">Банк Возрождение</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 300 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 3 лет</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 6,0%</p>
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
                        <a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/1.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">Ипотека "Для Дальнего востока"</a></h3>
                        <p class="clip">
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;3</span>
                            <span class="gray">Азиатско-Тихоокеанский Банк</span>
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
                        <p class="em-13 fw-600 mb-0">от 1,6%</p>
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
                        <a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">
                            <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                        </a>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0"><a href="<?= Url::toView('ipoteka-ipoteka-na-kvartiru-ot-alfa-banka') ?>">Ипотека на новостройку от Альфа-банка</a></h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;5</span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 600 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 3 лет</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">от 5,6%</p>
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
                        <h3>Ставки от 1,6%</h3>
                        <p class="my-auto pb-3">
                            Ипотека, доступная каждому!
                        </p>
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
                        <p class="my-auto pb-3">
                            Покупайте квартиры любого уровня!
                        </p>
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
        <h2 class="h1">Отзывы об ипотечных кредитах</h2>
        <div class="cart">
            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/0-1.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Ипотека «Льготная ипотека»</h3>
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
                        <h3 class="mb-1">Ипотека «ГОСПРОГРАММА 2020»</h3>
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
                        <h3 class="mb-1">Ипотека «Ипотека с господдержкой для семей с детьми»</h3>
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
                        <h3 class="yellow clip">Как менялись цены на жилье в Москве</h3>
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
                        <h3 class="yellow clip">Что нужно делать сегодня, чтобы на пенсии получать пассивный доход.</h3>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Как оформить выгодную ипотеку онлайн с помощью «Без&nbsp;Кредитов»</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-pie"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-contract"></i>
                        </div>
                        <p>Перед оформлением кредита ознакомьтесь с условиями на странице предложения</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-handshake"></i>
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
                <h2 class="h1">Ипотека: памятка для пользователей</h2>

                <p>Ипотека – это целевой вид кредита, который предоставляется физическим лицам для приобретения недвижимости. Особенность его в том, что залогом по оформляемому займу является приобретаемая квартира. Иметь в собственности другое имущество не обязательно.</p>

                <p>Более половины граждан России смогли стать собственниками жилья именно благодаря ипотечному кредиту. В нем нет ничего страшного. Главное - это грамотно подойти к выбору кредитора, внимательно изучить условия кредитования, оценив свой уровень платежеспособности.</p>

                <h3 class="h1">Условия получения ипотеки</h3>

                <p>Купить квартиру в ипотеку могут только те заемщики, которые соответствуют базовым требованиям банка. И если раньше молодежь с невысоким уровнем дохода не могла оформить такой кредит, то сейчас взять ипотеку могут многие. Базовые требования к заёмщикам по ипотеке:</p>

                <ul class="ul-circle">
                    <li><p>Возраст – от 20 лет;</p></li>
                    <li><p>Наличие гражданства РФ;</p></li>
                    <li><p>Постоянный доход;</p></li>
                    <li><p>Наличие постоянной регистрации на территории России. Получить кредит могут субъекты и с временной регистрацией;</p></li>
                    <li><p>Страховой стаж не менее 6 месяцев.</p></li>
                </ul>
                
                <p>Квартира в ипотеку доступна и нерезидентам. Банки рассматривают заявки, поданные лицами без гражданства. Вероятность положительного решения меньше, но она есть.</p>

                <p>Ставка по ипотечным займам стартует от 10% в год. Кредит выдается на долгосрочной основе, погасить долг можно за 20-30 лет. Благодаря поддержке государства существуют федеральные и региональные программы ипотечного кредитования, когда семья может получить ссуду с использованием материнского капитала, под более низкий процент, с дотацией первоначального взноса.</p>

                <h3 class="h1">Как оформить ипотеку на квартиру?</h3>

                <p>Кредит на покупку жилья оформляется по такому же алгоритму, как и любой кредитный продукт. Заемщик должен:</p>

                <ul class="ul-circle">
                    <li><p>Внимательно изучить условия кредитования. Оценить свои финансовые возможности с помощью ипотечного калькулятора.</p></li>
                    <li><p>Выбрать банк, который оптимально подходит в качестве кредитора.</p></li>
                    <li><p>Собрать необходимый пакет документов. Подать их в банк для рассмотрения. Многие финансовые учреждения сейчас позволяют подать сначала онлайн заявку, а потом уже донести документы при положительном решении.</p></li>
                    <li><p>Выбрать объект недвижимости.</p></li>
                    <li><p>Заключить с банком договор кредитования. С продавцом – договор купли-продажи. Параллельно составляется договор залога и страхования.</p></li>
                </ul>

                <p>Плюс в том, что оформить ипотеку можно как на объекты первичного рынка, так и на объекты вторичного рынка.</p>

                <h3 class="h1">Какие документы нужны при покупке квартиры в ипотеку?</h3>

                <p>В каждом банке свои требования. Поэтому стандартный пакет документов может отличаться в зависимости от кредитного дела, особенностей самого заемщика. Но, как правило, для подписания кредитного договора понадобятся:</p>

                <ul class="ul-circle">
                    <li><p>паспорт;</p></li>
                    <li><p>СНИЛС;</p></li>
                    <li><p>ИНН;</p></li>
                    <li><p>трудовая книжка;</p></li>
                    <li><p>справка об официальном уровне дохода;</p></li>
                    <li><p>военный билет;</p></li>
                    <li><p>свидетельство о рождении детей;</p></li>
                    <li><p>свидетельство о регистрации брака.</p></li>
                </ul>

                <p>Подробный список нужно уточнять у кредитного специалиста своего банка.</p>

                <h3 class="h1">В каком банке лучше взять ипотеку в 2021 году?</h3>

                <p>Чтобы сделать правильный выбор, изучите предложения по ипотечным кредитам, представленным на этой странице, и подайте онлайн-заявку в выбранный банк. Банк рассмотрит ее и сообщит о своем предварительном решении.</p>
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