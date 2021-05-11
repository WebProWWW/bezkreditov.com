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

            <a class="nav-ln" href="<?= Url::to(['site/company-list', 'page' => 1]) ?>">
                <span class="nav-txt">Рейтинг компаний по банкротству г.&nbsp;<?= $city->name ?></span>
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">
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
                Карты
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-2">
            <p class="fw-600 em-9 pl-1">Дебетовые карты</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Бесплатная</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С процентом на остаток</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Выгодные</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С кэшбэком</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн-заявка</span>
            </a>
            <p class="fw-600 em-9 pl-1">Кредитные карты</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С кэшбэком</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С плохой историей</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С доставкой</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Для снятия наличных</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-3">
            <span class="nav-txt">
                Кредиты
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-3">
            <p class="fw-600 em-9 pl-1">Потребительские кредиты</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Наличными</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн на карта</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без отказа</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С плохой кредитной историей</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Пенсионерам</span>
            </a>
            <p class="fw-600 em-9 pl-1">Микрозаймы</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">На карту</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без отказа</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без процентов</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Срочно</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">До зарплаты</span>
            </a>
            <p class="fw-600 em-9 pl-1">Автокредиты</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">На вторе с пробегом</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">На новый автомобиль</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Выгодные</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без первоначального взноса</span>
            </a>
            <p class="fw-600 em-9 pl-1">Рефинансирование</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">&nbsp;</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-4">
            <span class="nav-txt">
                Ипотека
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-4">
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без первоначального взноса</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">На новостройку</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">На вторичное жилье</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Без подтверждения дохода</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Молодой семье</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Социальная</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">С господдержкой</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Пенсионерам</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">По двум документам</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-5">
            <span class="nav-txt">
                Сервисы
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-5">
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн тест на списание долгов, кредитов</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн консультация по банкротству</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн тест на списание <br> долгов, кредитов</span>
            </a>
            <p class="fw-600 em-9 pl-1">Банкротство</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн подбор юриста по банкротству</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн калькулятор по банкротству</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Проверка долгов онлайн</span>
            </a>
            <p class="fw-600 em-9 pl-1">Кредиты и финансы</p>
            <a class="nav-ln" href="<?= Url::toView('polnaya-kreditnaya-istoriya') ?>">
                <span class="nav-txt">Полная кредитная история</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Защита от мощенников</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Проверка финансового здоровья</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-6">
            <span class="nav-txt">
                Калькуляторы
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-6">
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Онлайн калькулятор по банкротству</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Калькулятор налога с продажи квартиры</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Калькулятор рефинансирования</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Калькулятор перей и штрафов</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Ипотечный калькулятор</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Кредитный калькулятор</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-7">
            <span class="nav-txt">
                Финансы
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-7">
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Вводный курс</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Домашняя бухгалтерия</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Долги и кредиты</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Финансы и жилье</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Работа и зарплата</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Семья и деньги</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Права и обязанности</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Непредвиденные обстоятельства</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Обеспеченная старость</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Сохранить и приумножить</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Словарь финансовых терминов</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Вопрос? Ответ!</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Мнение эксперта</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Лайфхаки</span>
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-8">
            <span class="nav-txt">
                Еще
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-8">
            <p class="fw-600 em-9 pl-1">Банки</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Курсы валют ЦБ РФ</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Курсы обмена валют</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Рейтинги банков</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Клиентский рейтинг</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Финансовые показатели</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Отзывы о банках</span>
            </a>
            <p class="fw-600 em-9 pl-1">Банкротство</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Курсы валют ЦБ РФ</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Курсы обмена валют</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Рейтинги банков</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Клиентский рейтинг</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Финансовые показатели</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Отзывы о банках</span>
            </a>
            <p class="fw-600 em-9 pl-1">Статьи и новости</p>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Сравнения</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Бытовая аналитика</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Тест-драйвы</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Истории</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Советы</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Новости партнеров</span>
            </a>
            <a class="nav-ln" href="javascript:;">
                <span class="nav-txt">Funny Money</span>
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