<?php

use app\helpers\Url;

/* @var $city app\models\City */

?>
<div class="main-nav justify-content-between">
    <a class="main-nav-ln" href="#main-nav-content-1">
        <span class="nav-txt">
            БАНКРОТСТВО
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-2">
        <span class="nav-txt">
            РЕФИНАНСИРОВАНИЕ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-3">
        <span class="nav-txt">
            КРЕДИТЫ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-4">
        <span class="nav-txt">
            ИПОТЕКА
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-5">
        <span class="nav-txt">
            СЕРВИСЫ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-6">
        <span class="nav-txt">
            КАЛЬКУЛЯТОРЫ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-7">
        <span class="nav-txt">
            НОВОСТИ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-8">
        <span class="nav-txt">
            О ПРОЕКТЕ
            <i class="i-ch-down em-7"></i>
        </span>
    </a>

    <div class="main-nav-content" id="main-nav-content-1">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Банкротство</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">О проекте</span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-2">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Рефинансирование</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-3">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Кредиты</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <div class="col-3"></div>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <div class="col-3"></div>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-4">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Ипотека</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-5">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Сервисы</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-6">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Калькуляторы</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">О проекте</span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-7">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Новости</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-6" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">О проекте</span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <div class="main-nav-content" id="main-nav-content-8">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">О проекте</span>
                    <span class="logo-stxt">Вся полезная информация о банкротстве физических лиц в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-start">
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">О проекте</span>
                    </a>
                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->
</div><!-- .main-nav -->