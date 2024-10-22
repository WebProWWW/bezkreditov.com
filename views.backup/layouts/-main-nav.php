<?php

use app\helpers\Url;

/* @var $city app\models\City */

?>
<div class="main-nav justify-content-between">
    <a class="main-nav-ln" data-dropdown="#main-nav-content-1">
        <span class="nav-txt">
            Банкротство
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-1">
        <div class="row no-gutters">
            <div class="col-auto mr-4">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Банкротство</span>
                    <span class="logo-stxt">Вся полезная информация <br> о банкротстве физических лиц <br> в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <a class="nav-ln nav-list" href="<?= Url::to(['site/company-list', 'page' => 1]) ?>">
                            <span class="nav-txt">Рейтинг компаний по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list ws-nowrap" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">
                            <span class="nav-txt">Рейтинг арбитражных управляющих</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('rejting-chastnyh-yuristov') ?>">
                            <span class="nav-txt">Рейтинг частных юристов по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('vopros-otvet-po-bankrotstvu-fizicheskih-lic') ?>">
                            <span class="nav-txt">Вопрос-ответ по банкротству физических лиц</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col">
                        <a class="nav-ln nav-list" href="<?= Url::toView('onlajn-konsultaciya-yurista-po-bankrotstvu') ?>">
                            <span class="nav-txt">Онлайн консультация юриста по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('poleznye-materialy-po-bankrotstvu') ?>">
                            <span class="nav-txt">Полезные материалы по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('otzyvy-lyudej-proshedshih-proceduru-bankrotstva') ?>">
                            <span class="nav-txt">Отзывы людей прошедших процедуру банкротства</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('slovar-bankrotnyh-terminov-i-finansovyh-ponyatij') ?>">
                            <span class="nav-txt">Словарь «Без кредитов»</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln nav-list" href="<?= Url::toView('zakon-o-bankrotstve') ?>">
                            <span class="nav-txt">Закон о банкротстве</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('novosti-po-bankrotstvu') ?>">
                            <span class="nav-txt">Новости по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('ufssp-rossii') ?>">
                            <span class="nav-txt">УФССП России</span>
                        </a>
                    </div><!-- .col -->

                    <?php /*
                    <a class="nav-ln nav-list" href="<?= Url::toView('zapret-viezda-iz-rf') ?>">
                        <span class="nav-txt">Проверка запрета на выез за границу</span>
                    </a>
                    <a class="nav-ln nav-list" href="<?= Url::toView('uznat-svoi-dolgi') ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list" href="<?= Url::toView('servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits') ?>">
                        <span class="nav-txt">Сервис подбора юриста по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list" href="<?= Url::toView('obratnaya-svyaz') ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>
                    */ ?>
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-2">
        <span class="nav-txt">
            Карты
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-2">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="/debetovye-karty-1.html">
                    <span class="logo-txt">Карты</span>
                    <span class="logo-stxt">Вся полезная информация по банковским картам в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <a class="nav-ln fw-600" href="/debetovye-karty-1.html">
                            <span class="nav-txt">Дебетовые карты</span>
                        </a>
                        <a class="nav-ln nav-list" href="/debetovye-karty/besplatnyie-1.html">
                            <span class="nav-txt">Бесплатные</span>
                        </a>
                        <a class="nav-ln nav-list" href="/debetovye-karty/dohodnye-s-nachisleniem-na-ostatok-1.html">
                            <span class="nav-txt">С процентом на остаток</span>
                        </a>
                        <a class="nav-ln nav-list" href="/debetovye-karty/vygodnye-1.html">
                            <span class="nav-txt">Выгодные</span>
                        </a>
                        <a class="nav-ln nav-list" href="/debetovye-karty/cashback-1.html">
                            <span class="nav-txt">С кэшбэком</span>
                        </a>
                        <a class="nav-ln nav-list" href="/debetovye-karty/onlajn-1.html">
                            <span class="nav-txt">Онлайн-заявка</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <a class="nav-ln fw-600" href="/kreditnye-karty-1.html">
                            <span class="nav-txt">Кредитные карты</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kreditnye-karty/cashback-1.html">
                            <span class="nav-txt">С кэшбэком</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kreditnye-karty/s-plohoj-kreditnoj-istoriej-1.html">
                            <span class="nav-txt">С плохой историей</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kreditnye-karty-1.html">
                            <span class="nav-txt">Онлайн</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kreditnye-karty/s-dostavkoj-1.html">
                            <span class="nav-txt">С доставкой</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kreditnye-karty/dlya-snyatiya-nalichnyh-1.html">
                            <span class="nav-txt">Для снятия наличных</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-3">
        <span class="nav-txt">
            Кредиты
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-3">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="javascript:;">
                    <span class="logo-txt">Кредиты</span>
                    <span class="logo-stxt">Мы не рекомендуем брать кредиты без нужды, но если без этого никак воспользуйтесь нашим поиском самых выгодных условий по кредитом</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="nav-ln fw-600" href="/kredity-1.html">
                            <span class="nav-txt">Потребительские кредиты</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity/nalichnymi-1.html">
                            <span class="nav-txt">Наличными</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity-1.html">
                            <span class="nav-txt">Онлайн на карту</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity/nalichnymi-bez-otkaza-1.html">
                            <span class="nav-txt">Без отказа</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity/s-plohoj-kreditnoj-istoriej-i-prosrochkami-1.html">
                            <span class="nav-txt">С плохой КИ</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity/dlya-pensionerov-1.html">
                            <span class="nav-txt">Пенсионерам</span>
                        </a>
                        <a class="nav-ln nav-list" href="/kredity/s-momentalnym-resheniem-1.html">
                            <span class="nav-txt">С моментальным решением</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln fw-600" href="/mikrozajmy-1.html">
                            <span class="nav-txt">Микрозаймы</span>
                        </a>
                        <a class="nav-ln nav-list" href="/mikrozajmy-1.html">
                            <span class="nav-txt">На карту</span>
                        </a>
                        <a class="nav-ln nav-list" href="/mikrozajmy/zajm-na-kartu-bez-otkaza-1.html">
                            <span class="nav-txt">Без отказа</span>
                        </a>
                        <a class="nav-ln nav-list" href="/mikrozajmy/bes-procentov-1.html">
                            <span class="nav-txt">Без процентов</span>
                        </a>
                        <a class="nav-ln nav-list" href="/mikrozajmy/srochno-1.html">
                            <span class="nav-txt">Срочно</span>
                        </a>
                        <a class="nav-ln nav-list" href="/mikrozajmy/na-kartu-do-zarplaty-1.html">
                            <span class="nav-txt">До зарплаты</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln fw-600" href="javascript:;">
                            <span class="nav-txt">&nbsp;</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('katalog-mfo') ?>">
                            <span class="nav-txt">Каталог <br>МФО</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('katalog-bankov') ?>">
                            <span class="nav-txt">Каталог <br>банков</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col">
                        <a class="nav-ln fw-600" href="/avtokredity-1.html">
                            <span class="nav-txt">Автокредиты</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/na-poderzhannyj-avtomobil-1.html">
                            <span class="nav-txt">На вторе с пробегом</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/na-novyj-avtomobil-bez-pervonachalnogo-vznosa-1.html">
                            <span class="nav-txt">На новый автомобиль</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/-1.html">
                            <span class="nav-txt">Выгодные</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/bez-pervonachalnogo-vznosa-1.html">
                            <span class="nav-txt">Без первоначального взноса</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/onlajn-zayavka-1.html">
                            <span class="nav-txt">Онлайн-заявка</span>
                        </a>
                        <a class="nav-ln nav-list" href="/avtokredity/populyarnye-1.html">
                            <span class="nav-txt">Выгодные</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln fw-600" href="/refinance-1.html">
                            <span class="nav-txt">Рефинансирование</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-4">
        <span class="nav-txt">
            Ипотека
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-4">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="/ipoteka-1.html">
                    <span class="logo-txt">Ипотека</span>
                    <span class="logo-stxt">Вся полезная информация по ипотеке и ипотечному кредитованию в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <a class="nav-ln" href="/ipoteka-1.html">
                    <span class="nav-txt fw-600">Ипотека</span>
                </a>
                <div class="row">
                    <div class="col-4">
                        <a class="nav-ln nav-list" href="/ipoteka/bez-pervonachalnogo-vznosa-1.html">
                            <span class="nav-txt">Без первоначального взноса</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/na-pervichnom-rynke-1.html">
                            <span class="nav-txt">На новостройку</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/na-vtorichnom-rynke-1.html">
                            <span class="nav-txt">На вторичное жилье</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/bez-podtverzhdeniya-dohoda-1.html">
                            <span class="nav-txt">Без подтверждения дохода</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <a class="nav-ln nav-list" href="/ipoteka/dlya-molodoj-semi-1.html">
                            <span class="nav-txt">Молодой семье</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/socialnaya-ipoteka-1.html">
                            <span class="nav-txt">Социальная</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/s-gospodderzhkoj-1.html">
                            <span class="nav-txt">С господдержкой</span>
                        </a>
                        <a class="nav-ln nav-list" href="/ipoteka/dlya-pensionerov-1.html">
                            <span class="nav-txt">Пенсионерам</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <a class="nav-ln nav-list" href="/ipoteka/po-2-dokumentam-1.html">
                            <span class="nav-txt">По двум документам</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-5">
        <span class="nav-txt">
            Сервисы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-5">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Сервисы</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class="nav-ln" href="<?= Url::toView('bankrotstvo') ?>">
                            <span class="nav-txt fw-600">Банкротство</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн подбор юриста по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн калькулятор по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Проверка долгов онлайн</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн тест на списание долгов, кредитов</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col">
                        <a class="nav-ln" href="javascript:;">
                            <span class="nav-txt fw-600">&nbsp;</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн консультация по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн тест на списание <br> долгов, кредитов</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col">
                        <a class="nav-ln" href="javascript:;">
                            <span class="nav-txt fw-600">Кредиты и финансы</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('polnaya-kreditnaya-istoriya') ?>">
                            <span class="nav-txt">Полная кредитная история</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('zashita-ot-moshennikov') ?>">
                            <span class="nav-txt">Защита от мощенников</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('proverka-finansovogo-zdorovya') ?>">
                            <span class="nav-txt">Проверка финансового здоровья</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('podbor-kredita') ?>">
                            <span class="nav-txt">Подбор кредита</span>
                        </a>
                        <a class="nav-ln nav-list" href="<?= Url::toView('kreditnyj-kalkulyator') ?>">
                            <span class="nav-txt">Кредитный калькулятор</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln fw-600" href="<?= Url::toView('osago-onlajn') ?>">
                            ОСАГО онлайн
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-6">
        <span class="nav-txt">
            Калькуляторы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-6">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Калькуляторы</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Онлайн калькулятор по банкротству</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Калькулятор налога с продажи квартиры</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Калькулятор рефинансирования</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Калькулятор перей и штрафов</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-auto">
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Ипотечный калькулятор</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Кредитный калькулятор</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <?php /*
    <a class="main-nav-ln" data-dropdown="#main-nav-content-7">
        <span class="nav-txt">
            Финансы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-7">
        <div class="row align-items-center">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Финансы</span>
                    <span class="logo-stxt">Вся полезная информация о финансировании</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav">

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Вводный курс</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Домашняя бухгалтерия</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Долги и кредиты</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Финансы и жилье</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Работа и зарплата</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Семья и деньги</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Права и обязанности</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Непредвиденные обстоятельства</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Обеспеченная старость</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Сохранить и приумножить</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Словарь финансовых терминов</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Вопрос? Ответ!</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Мнение эксперта</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Лайфхаки</span>
                    </a>
                    <!-- ROW -->

                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-8">
        <span class="nav-txt">
            Еще
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-8">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Полезная информация</span>
                    <span class="logo-stxt">Вся полезная информация о финансах в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <p class="fw-600">Банки</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы валют ЦБ РФ</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы обмена валют</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Рейтинги банков</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Клиентский рейтинг</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Финансовые показатели</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Отзывы о банках</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <p class="fw-600">Банкротство</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы валют ЦБ РФ</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы обмена валют</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Рейтинги банков</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Клиентский рейтинг</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Финансовые показатели</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Отзывы о банках</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <p class="fw-600">Статьи и новости</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Сравнения</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Бытовая аналитика</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Тест-драйвы</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Истории</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Советы</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Новости партнеров</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Funny Money</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->
    */ ?>

    <a class="main-nav-ln" href="<?= Url::toView('novosti-po-bankrotstvu') ?>">
        <span class="nav-txt">Новости</span>
    </a>

    <a class="main-nav-ln" href="<?= Url::toView('o-proekte') ?>">
        <span class="nav-txt">О проекте</span>
    </a>
</div><!-- .main-nav -->