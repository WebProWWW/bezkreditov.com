<?php

use app\helpers\Url;

/* @var $city app\models\City */

?>
<div class="main-nav justify-content-between">
    <a class="main-nav-ln" href="#main-nav-content-1">
        <span class="nav-txt">
            Банкротство
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-2">
        <span class="nav-txt">
            Рефинансирование
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-3">
        <span class="nav-txt">
            Кредиты
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-4">
        <span class="nav-txt">
            Ипотека
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-5">
        <span class="nav-txt">
            Сервисы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-6">
        <span class="nav-txt">
            Калькуляторы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-7">
        <span class="nav-txt">
            Новости
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <a class="main-nav-ln" href="#main-nav-content-8">
        <span class="nav-txt">
            О проекте
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
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav align-items-center">
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Рейтинг компаний по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Онлайн консультация юриста по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                        <span class="nav-txt">Закон о банкротстве</span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Проверка запрета на выез за границу</span>
                    </a>

                    <div class="col-12"></div>

                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                        <span class="nav-txt">Рейтинг арбитражных управляющих г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Полезные материалы по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                        <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Обратная связь</span>
                    </a>

                    <div class="col-12"></div>

                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                        <span class="nav-txt">УФССП России г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                        <span class="nav-txt">Отзывы людей прошедших процедуру банкротства г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                        <span class="nav-txt">Сервис подбора юриста по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">О проекте</span>
                    </a>

                    <div class="col-12"></div>

                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                        <span class="nav-txt">Новости по банкротству г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col-4" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                        <span class="nav-txt">Вопрос-ответ по банкротству физических лиц г.&nbsp;<?= $city->name ?></span>
                    </a>
                    <a class="nav-ln nav-list col" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                        <span class="nav-txt">Словарь «Без кредитов»</span>
                    </a>
                    <div class="nav-ln col">&nbsp;</div>
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