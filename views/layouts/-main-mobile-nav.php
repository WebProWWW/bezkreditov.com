<?php

use app\helpers\Url;

?>

<div class="main-mnav">
    <div class="main-mnav-close"><i class="i-times"></i></div>

    <div class="main-mnav-sidebar">
        <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
            <span class="row no-gutters justify-content-center align-items-center">
                <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
            </span>
        </a>

        <a class="main-mnav-ln" href="#main-mnav-content-1">
            <span class="nav-txt">
                БАНКРОТСТВО
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-1">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-2">
            <span class="nav-txt">
                РЕФИНАНСИРОВАНИЕ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-2">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-3">
            <span class="nav-txt">
                КРЕДИТЫ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-3">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-4">
            <span class="nav-txt">
                ИПОТЕКА
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-4">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-5">
            <span class="nav-txt">
                СЕРВИСЫ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-5">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-6">
            <span class="nav-txt">
                КАЛЬКУЛЯТОРЫ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-6">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-7">
            <span class="nav-txt">
                НОВОСТИ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-7">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" href="#main-mnav-content-8">
            <span class="nav-txt">
                О ПРОЕКТЕ
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-8">
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu']) ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'zakon-o-bankrotstve']) ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'poleznye-materialy-po-bankrotstvu']) ?>">
                <span class="nav-txt">Полезные материалы по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'ufssp-rossii']) ?>">
                <span class="nav-txt">УФССП России по&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva']) ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства в&nbsp;&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">
                <span class="nav-txt">Новости по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic']) ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/index', 'view' => 'o-proekte']) ?>">
                <span class="nav-txt">О проекте</span>
            </a>
        </div><!-- .main-mnav-content -->
    </div><!-- .main-mnav -->
</div><!-- .main-mnav-sidebar -->