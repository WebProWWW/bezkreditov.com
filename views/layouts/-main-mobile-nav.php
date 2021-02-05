<?php

use app\helpers\Url;

/* @var $city app\models\City */

$user = Yii::$app->user->isGuest ? null : Yii::$app->user->identity;

?>

<div class="main-mnav">
    <div class="main-mnav-close"><i class="i-times"></i></div>

    <div class="main-mnav-sidebar">
        <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
            <span class="row no-gutters justify-content-center align-items-center">
                <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
            </span>
        </a>

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-1">
            <span class="nav-txt">
                Банкротство
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-1">

            <a class="nav-ln" href="<?= Url::toView('rejting-kompanij-po-bankrotstvu') ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('rejting-arbitrazhnyh-upravlyayushih') ?>">
                <span class="nav-txt">Рейтинг арбитражных управляющих г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('rejting-chastnyh-yuristov') ?>">
                <span class="nav-txt">Рейтинг частных юристов по банкротству</span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('novosti-po-bankrotstvu') ?>">
                <span class="nav-txt">Новости по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('onlajn-konsultaciya-yurista-po-bankrotstvu') ?>">
                <span class="nav-txt">Онлайн консультация юриста по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('poleznye-materialy-po-bankrotstvu') ?>">
                <span class="nav-txt">Полезные материалы по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('otzyvy-lyudej-proshedshih-proceduru-bankrotstva') ?>">
                <span class="nav-txt">Отзывы людей прошедших процедуру банкротства г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('vopros-otvet-po-bankrotstvu-fizicheskih-lic') ?>">
                <span class="nav-txt">Вопрос-ответ по банкротству физических лиц г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('zakon-o-bankrotstve') ?>">
                <span class="nav-txt">Закон о банкротстве</span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('uznat-svoi-dolgi') ?>">
                <span class="nav-txt">Узнать свои долги г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits') ?>">
                <span class="nav-txt">Сервис подбора юриста по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('slovar-bankrotnyh-terminov-i-finansovyh-ponyatij') ?>">
                <span class="nav-txt">Словарь «Без кредитов»</span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('zapret-viezda-iz-rf') ?>">
                <span class="nav-txt">Проверка запрета на выез за границу</span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('ufssp-rossii') ?>">
                <span class="nav-txt">УФССП России г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::toView('obratnaya-svyaz') ?>">
                <span class="nav-txt">Обратная связь</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-2">
            <span class="nav-txt">
                Рефинансирование
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

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-3">
            <span class="nav-txt">
                Кредиты
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

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-4">
            <span class="nav-txt">
                Ипотека
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

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-5">
            <span class="nav-txt">
                Сервисы
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

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-6">
            <span class="nav-txt">
                Калькуляторы
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

        <a class="main-mnav-ln" href="<?= Url::toView('novosti-po-bankrotstvu') ?>">
            <span class="nav-txt">
                Новости
            </span>
        </a>

        <a class="main-mnav-ln" href="<?= Url::toView('o-proekte') ?>">
            <span class="nav-txt">
                О проекте
            </span>
        </a>

        <div class="row">
            <div class="col-auto">
                <?php if ($user): ?>
                    <a class="btn-sm btn-default" href="<?= Url::to(['site/logout']) ?>">
                        <i class="i-out"></i>
                        Выйти
                    </a>
                <?php else: ?>
                    <a class="btn-sm btn-default" data-fancybox href="#login">Вход</a>
                <?php endif; ?>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-mnav -->
</div><!-- .main-mnav-sidebar -->