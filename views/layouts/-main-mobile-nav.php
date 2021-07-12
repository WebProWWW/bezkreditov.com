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
                Рейтинг компаний по банкротству
            </a>
            <a class="nav-ln" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">
                Рейтинг арбитражных управляющих
            </a>
            <a class="nav-ln" href="<?= Url::toView('rejting-chastnyh-yuristov') ?>">
                Рейтинг частных юристов по банкротству
            </a>
            <a class="nav-ln" href="<?= Url::toView('vopros-otvet-po-bankrotstvu-fizicheskih-lic') ?>">
                Вопрос-ответ по банкротству физических лиц
            </a>
            <a class="nav-ln" href="<?= Url::toView('onlajn-konsultaciya-yurista-po-bankrotstvu') ?>">
                Онлайн консультация юриста по банкротству
            </a>
            <a class="nav-ln" href="<?= Url::toView('poleznye-materialy-po-bankrotstvu') ?>">
                Полезные материалы по банкротству
            </a>
            <a class="nav-ln" href="<?= Url::toView('otzyvy-lyudej-proshedshih-proceduru-bankrotstva') ?>">
                Отзывы людей прошедших процедуру банкротства
            </a>
            <a class="nav-ln" href="<?= Url::toView('slovar-bankrotnyh-terminov-i-finansovyh-ponyatij') ?>">
                Словарь «Без кредитов»
            </a>
            <a class="nav-ln" href="<?= Url::toView('zakon-o-bankrotstve') ?>">
                Закон о банкротстве
            </a>
            <a class="nav-ln" href="<?= Url::toView('novosti-po-bankrotstvu') ?>">
                Новости по банкротству
            </a>
            <a class="nav-ln" href="<?= Url::toView('ufssp-rossii') ?>">
                УФССП России
            </a>
            <?php /*
            <a class="nav-ln" href="<?= Url::toView('zapret-viezda-iz-rf') ?>">
                Проверка запрета на выез за границу
            </a>
            <a class="nav-ln" href="<?= Url::toView('uznat-svoi-dolgi') ?>">
                Узнать свои долги г.&nbsp;<?= $city->name ?>
            </a>
            <a class="nav-ln" href="<?= Url::toView('servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits') ?>">
                Сервис подбора юриста по банкротству г.&nbsp;<?= $city->name ?>
            </a>
            <a class="nav-ln" href="<?= Url::toView('obratnaya-svyaz') ?>">
                Обратная связь
            </a>
            */ ?>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-2">
            <span class="nav-txt">
                Карты
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-2">
            <a class="nav-ln fw-600" href="/debetovye-karty-1.html">
                <span class="nav-txt">Дебетовые карты</span>
            </a>
            <a class="nav-ln" href="/debetovye-karty-besplatnyie-1.html">
                <span class="nav-txt">Бесплатные</span>
            </a>
            <a class="nav-ln" href="/debetovye-karty-dohodnye-s-nachisleniem-na-ostatok-1.html">
                <span class="nav-txt">С процентом на остаток</span>
            </a>
            <a class="nav-ln" href="/debetovye-karty-vygodnye-1.html">
                <span class="nav-txt">Выгодные</span>
            </a>
            <a class="nav-ln" href="/debetovye-karty-cashback-1.html">
                <span class="nav-txt">С кэшбэком</span>
            </a>
            <a class="nav-ln" href="/debetovye-karty-onlajn-1.html">
                <span class="nav-txt">Онлайн-заявка</span>
            </a>
            <a class="nav-ln fw-600" href="/kreditnye-karty-1.html">
                <span class="nav-txt">Кредитные карты</span>
            </a>
            <a class="nav-ln" href="/kreditnye-karty-cashback-1.html">
                <span class="nav-txt">С кэшбэком</span>
            </a>
            <a class="nav-ln" href="/kreditnye-karty-s-plohoj-kreditnoj-istoriej-1.html">
                <span class="nav-txt">С плохой историей</span>
            </a>
            <a class="nav-ln" href="/kreditnye-karty-1.html">
                <span class="nav-txt">Онлайн</span>
            </a>
            <a class="nav-ln" href="/kreditnye-karty-s-dostavkoj-1.html">
                <span class="nav-txt">С доставкой</span>
            </a>
            <a class="nav-ln" href="/kreditnye-karty-dlya-snyatiya-nalichnyh-1.html">
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
            <a class="nav-ln fw-600" href="<?= Url::toView('potrebitelskie-kredity') ?>">
                Потребительские кредиты
            </a>
            <a class="nav-ln" href="<?= Url::toView('potrebitelskie-kredity-nalichnymi') ?>">
                Наличными
            </a>
            <a class="nav-ln" href="<?= Url::toView('potrebitelskie-kredity-onlajn-na-kartu') ?>">
                Онлайн на карту
            </a>
            <a class="nav-ln" href="<?= Url::toView('potrebitelskie-kredity-bez-otkaza') ?>">
                Без отказа
            </a>
            <a class="nav-ln" href="<?= Url::toView('potrebitelskie-kredity-s-plohoj-kreditnoj-istoriej') ?>">
                С плохой кредитной историей
            </a>
            <a class="nav-ln" href="<?= Url::toView('potrebitelskie-kredity-pensioneram') ?>">
                Пенсионерам
            </a>
            <a class="nav-ln fw-600" href="<?= Url::toView('mikrozajmy') ?>">
                Микрозаймы
            </a>
            <a class="nav-ln" href="<?= Url::toView('mikrozajmy-na-kartu') ?>">
                На карту
            </a>
            <a class="nav-ln" href="<?= Url::toView('mikrozajmy-bez-otkaza') ?>">
                Без отказа
            </a>
            <a class="nav-ln" href="<?= Url::toView('mikrozajmy-bez-procentov') ?>">
                Без процентов
            </a>
            <a class="nav-ln" href="<?= Url::toView('mikrozajmy-srochno') ?>">
                Срочно
            </a>
            <a class="nav-ln" href="<?= Url::toView('mikrozajmy-do-zarplaty') ?>">
                До зарплаты
            </a>
            <a class="nav-ln fw-600" href="<?= Url::toView('avtokredity') ?>">
                Автокредиты
            </a>
            <a class="nav-ln" href="<?= Url::toView('avtokredity-na-vtore-s-probegom') ?>">
                На вторе с пробегом
            </a>
            <a class="nav-ln" href="<?= Url::toView('avtokredity-na-novyj-avtomobil') ?>">
                На новый автомобиль
            </a>
            <a class="nav-ln" href="<?= Url::toView('avtokredity-vygodnye') ?>">
                Выгодные
            </a>
            <a class="nav-ln" href="<?= Url::toView('avtokredity-bez-pervonachalnogo-vznosa') ?>">
                Без первоначального взноса
            </a>
            <a class="nav-ln fw-600" href="<?= Url::toView('refinansirovanie-kredita') ?>">
                Рефинансирование
            </a>
            <a class="nav-ln" href="<?= Url::toView('katalog-mfo') ?>">
                Каталог МФО
            </a>
            <a class="nav-ln" href="<?= Url::toView('katalog-bankov') ?>">
                Каталог банков
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-4">
            <span class="nav-txt">
                Ипотека
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-4">
            <a class="nav-ln fw-600" href="/ipoteka-1.html">
                Ипотека
            </a>
            <a class="nav-ln" href="/ipoteka-bez-pervonachalnogo-vznosa-1.html">
                Без первоначального взноса
            </a>
            <a class="nav-ln" href="/ipoteka-na-pervichnom-rynke-1.html">
                На новостройку
            </a>
            <a class="nav-ln" href="/ipoteka-na-vtorichnom-rynke-1.html">
                На вторичное жилье
            </a>
            <a class="nav-ln" href="/ipoteka-bez-podtverzhdeniya-dohoda-1.html">
                Без подтверждения дохода
            </a>
            <a class="nav-ln" href="/ipoteka-dlya-molodoj-semi-1.html">
                Молодой семье
            </a>
            <a class="nav-ln" href="/ipoteka-socialnaya-ipoteka-1.html">
                Социальная
            </a>
            <a class="nav-ln" href="/ipoteka-s-gospodderzhkoj-1.html">
                С господдержкой
            </a>
            <a class="nav-ln" href="/ipoteka-dlya-pensionerov-1.html">
                Пенсионерам
            </a>
            <a class="nav-ln" href="/ipoteka-po-2-dokumentam-1.html">
                По двум документам
            </a>
        </div><!-- .main-mnav-content -->

        <a class="main-mnav-ln" data-dropdown="#main-mnav-content-5">
            <span class="nav-txt">
                Сервисы
            </span>
            <i class="i-ch-down em-8"></i>
        </a>
        <div class="main-mnav-content" id="main-mnav-content-5">
            <a class="nav-ln fw-600" href="<?= Url::toView('bankrotstvo') ?>">
                Банкротство
            </a>
            <a class="nav-ln" href="javascript:;">
                Онлайн подбор юриста по банкротству
            </a>
            <a class="nav-ln" href="javascript:;">
                Онлайн калькулятор по банкротству
            </a>
            <a class="nav-ln" href="javascript:;">
                Проверка долгов онлайн
            </a>
            <a class="nav-ln" href="javascript:;">
                Онлайн тест на списание долгов, кредитов
            </a>
            <a class="nav-ln" href="javascript:;">
                Онлайн консультация по банкротству
            </a>
            <a class="nav-ln fw-600" href="javascript:;">
                Кредиты и финансы
            </a>
            <a class="nav-ln" href="<?= Url::toView('polnaya-kreditnaya-istoriya') ?>">
                Полная кредитная история
            </a>
            <a class="nav-ln" href="<?= Url::toView('zashita-ot-moshennikov') ?>">
                Защита от мощенников
            </a>
            <a class="nav-ln" href="<?= Url::toView('proverka-finansovogo-zdorovya') ?>">
                Проверка финансового здоровья
            </a>
            <a class="nav-ln" href="<?= Url::toView('podbor-kredita') ?>">
                Подбор кредита
            </a>
            <a class="nav-ln" href="<?= Url::toView('kreditnyj-kalkulyator') ?>">
                Кредитный калькулятор
            </a>
            <a class="nav-ln fw-600" href="<?= Url::toView('osago-onlajn') ?>">
                ОСАГО онлайн
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

        <?php /*
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
            <a class="nav-ln fw-600" href="javascript:;">
                Банки
            </a>
            <a class="nav-ln" href="javascript:;">
                Курсы валют ЦБ РФ
            </a>
            <a class="nav-ln" href="javascript:;">
                Курсы обмена валют
            </a>
            <a class="nav-ln" href="javascript:;">
                Рейтинги банков
            </a>
            <a class="nav-ln" href="javascript:;">
                Клиентский рейтинг
            </a>
            <a class="nav-ln" href="javascript:;">
                Финансовые показатели
            </a>
            <a class="nav-ln" href="javascript:;">
                Отзывы о банках
            </a>
            <a class="nav-ln fw-600" href="javascript:;">
                Банкротство
            </a>
            <a class="nav-ln" href="javascript:;">
                Курсы валют ЦБ РФ
            </a>
            <a class="nav-ln" href="javascript:;">
                Курсы обмена валют
            </a>
            <a class="nav-ln" href="javascript:;">
                Рейтинги банков
            </a>
            <a class="nav-ln" href="javascript:;">
                Клиентский рейтинг
            </a>
            <a class="nav-ln" href="javascript:;">
                Финансовые показатели
            </a>
            <a class="nav-ln" href="javascript:;">
                Отзывы о банках
            </a>
            <a class="nav-ln fw-600" href="javascript:;">
                Статьи и новости
            </a>
            <a class="nav-ln" href="javascript:;">
                Сравнения
            </a>
            <a class="nav-ln" href="javascript:;">
                Бытовая аналитика
            </a>
            <a class="nav-ln" href="javascript:;">
                Тест-драйвы
            </a>
            <a class="nav-ln" href="javascript:;">
                Истории
            </a>
            <a class="nav-ln" href="javascript:;">
                Советы
            </a>
            <a class="nav-ln" href="javascript:;">
                Новости партнеров
            </a>
            <a class="nav-ln" href="javascript:;">
                Funny Money
            </a>
        </div><!-- .main-mnav-content -->
        */ ?>

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