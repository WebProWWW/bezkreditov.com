<?php

use app\helpers\Url;
use app\models\City;
use app\widgets\FormAjax;
use app\models\User;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $content string */
/* @var $cities City[] */
/* @var $city City */
/* @var $user User */

$city = $this->params['city'];

$description = ArrayHelper::getValue($this->params, 'description', '');
$description = StringHelper::truncate($description, 160);

$title = $this->title ? Html::encode($this->title) : 'Без кредитов';

$urlBase = Url::base(true);
$currentUrl = ArrayHelper::getValue($this->params, 'currentUrl', $urlBase);

$user = Yii::$app->user->isGuest ? null : Yii::$app->user->identity;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <?php $this->registerCsrfMetaTags() ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap">
    <link rel="stylesheet" href="/css/main.depends.css?v=032">
    <link rel="stylesheet" href="/css/main.css?v=060">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:url" content="<?= $currentUrl ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Без кредитов">
    <meta property="og:description" content="<?= $description ?>">
    <?php $this->head() ?>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= Yii::$app->request->hostInfo ?>/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="<?= Yii::$app->request->hostInfo ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= Yii::$app->request->hostInfo ?>/favicon-16x16.png" sizes="16x16">
    <meta name="application-name" content="Без кредитов">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?= Yii::$app->request->hostInfo ?>/mstile-144x144.png">
</head>
<body>
<?php $this->beginBody() ?>

<div class="full-height">

<?php if (ArrayHelper::getValue($this->params, 'is-header', true)): ?>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <a class="logo logo-xs" href="<?= Url::home() ?>">
                        <span class="row no-gutters flex-nowrap align-items-center lh-11">
                            <span class="col-auto mr-3">
                                <span class="logo-txt m-0">Без кредитов</span>
                            </span>
                            <span class="col d-none d-md-block" style="text-align: left;">
                                <span class="em-8">
                                    Городской портал «Без Кредитов» - помогает жителям
                                    <br>
                                    избавиться от долгов и начать свою жизнь с чистого лица
                                </span>
                            </span>
                        </span>
                    </a>
                </div>

                <div class="align-self-stretch mb-3 mx-auto d-none d-xl-block"><span class="divider-v-primary"></span></div>

                <div class="col-2 d-none d-xl-block">
                    <p class="em-9 fw-400">
                        Выберите свой город:
                        <br>
                        <a data-fancybox href="#cities"><?= $city->name ?></a>
                    </p>
                </div>

                <div class="align-self-stretch mb-3 mx-auto d-none d-xl-block"><span class="divider-v-primary"></span></div>

                <div class="col-auto d-none d-xl-block">
                    <div class="row">
                        <div class="col-auto">
                            <p>
                                <a href>USD</a> <span class="mutted em-8">ЦБ</span>
                                <span class="d-block">73.4775</span>
                            </p>
                        </div>
                        <div class="col-auto">
                            <p>
                                <a href>EUR</a> <span class="mutted em-8">ЦБ</span>
                                <span class="d-block">89.4025</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="align-self-stretch mb-3 mx-auto d-none d-xl-block"><span class="divider-v-primary"></span></div>

                <div class="col-auto ml-auto pr-3 d-xl-none">
                    <div class="toggle-btn" data-fancybox data-src="#cities">
                        <i class="i-map toggle-i em-11"></i>
                    </div>
                </div>

                <div class="col-auto pr-3 mr-xl-auto">
                    <div class="toggle-btn" data-toggle="#header-nav">
                        <i class="i-search toggle-i em-11"></i>
                    </div>
                </div>

                <div class="col-auto d-none d-sm-block d-xl-none">
                    <div class="toggle-btn" data-toggle="#header-nav">
                        <i class="i-bars toggle-i"></i>
                    </div>
                </div><!-- .col -->

                <div class="col-auto d-none d-xl-block">
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
        </div><!-- .container -->
    </div><!-- .header-top -->
    <div class="header-body d-none d-xl-block">
        <div class="container">
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
        </div><!-- .container -->
    </div><!-- .header-body -->
</header>
<?php endif; ?>

<?php if ($breadcrumbs = ArrayHelper::getValue($this->params, 'breadcrumbs', [])): ?>
    <section class="section">
        <div class="container">
            <nav class="breadcrubmbs">
                <a class="breadcrubmbs-ln" href="<?= Url::home() ?>">
                    <i class="i-home"></i> Главная
                </a>
                <?php foreach ($breadcrumbs as $breadcrumb): ?>
                    <?php if (is_array($breadcrumb)):?>
                        <a class="breadcrubmbs-ln" href="<?= Url::to($breadcrumb['url']) ?>">
                            <?= $breadcrumb['label'] ?>
                        </a>
                    <?php elseif (is_string($breadcrumb)): ?>
                        <span class="breadcrubmbs-ln">
                            <?= $breadcrumb ?>
                        </span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </nav>
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?= $content ?>

<?php if (ArrayHelper::getValue($this->params, 'is-footer', true)): ?>
<footer class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-auto">
                <div class="row">
                    <div class="col-auto mx-auto">
                        <a class="logo" href="<?= Url::home() ?>">
                            <span class="logo-txt">Без кредитов</span>
                            <span class="logo-stxt">Помогаем избавиться от долгов</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-auto mr-3 d-lg-none">
                        <div class="d-flex align-items-center">
                            <div class="toggle-btn" data-toggle="#footer-nav">
                                <i class="i-bars toggle-i"></i>
                                <p class="toggle-txt">Меню</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a class="btn-trsp">
                            <span class="row no-gutters justify-content-center align-items-center">
                                <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                                <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                            </span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-lg">
                <?= $this->render('-nav', ['city' => $city, 'id' => 'footer-nav']) ?>
            </div><!-- .col -->
        </div><!-- .row -->
        <br>
        <p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>
    </div><!-- .container -->
</footer><!-- .section -->
<?php endif; ?>

</div><!-- .full-height -->

<!-- МОДАЛЬНЫЕ ОКНА -->
<div class="d-none">


<!-- БОНУС -->
<div class="modal-md" id="test-bonus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-3 col-lg-auto">
                <img class="img-center" width="200" src="/img/idir.png">
            </div><!-- .col -->
            <div class="col-12 col-md">
                <h3 class="h2">За прохождение теста вы дополнительно получаете:</h3>
                <p class="dialog mb-2">
                    План по списанию долго в подарок:
                    <br>
                    <em>(пошаговая инструкция образцы заявлений, приложений, ходатайств по банкротству, сроки, размеры госпошлин)</em>
                </p>
                <p class="dialog mb-2">Образец заявления для подачи в Арбитражный суд</p>
                <p class="dialog mb-2">Подробные отзывы и истории людей начавших жизнь с чистого листа</p>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .modal -->


<!-- ПРОЙТИ ТЕСТ -->
<div class="test-modal" id="test">
    <div
        class="js-test"
        data-action="<?= Url::to(['site/send-test']) ?>"
    ></div>
</div><!-- .modal -->


<!-- ВАШ ГОРОД? -->
<div class="modal modal-sm" id="is-city">
    <p>Ваш регион — <?= $city->name ?>?</p>
    <div class="row">
        <div class="col-12 col-sm-6">
            <span class="btn-sm btn-default" data-fancybox-close>Всё верно</span>
        </div>
        <div class="col-12 col-sm-6">
            <a class="btn-sm btn-trsp" data-fancybox href="#cities" data-options='{"closeExisting" : true}'>Выбрать другой</a>
        </div>
    </div>
</div><!-- .modal -->


<!-- СПИСОК ГОРОДОВ -->
<div class="modal em-9" id="cities">
    <!-- КЭШИРОВАНИЕ МЕНЮ СТРАН -->
    <?php if ($this->beginCache('main-city-list', ['duration' => 3600 * 24 * 365 ])): ?>
        <?php if ($cities = City::find()->all()): ?>
            <label class="label">Быстрый поиск города</label>
            <div class="js-search">
                <input class="input js-search-input" type="text" placeholder="Введите название своего города">
                <div class="row">
                    <?php $letter = '' ?>
                    <?php foreach ($cities as $city): ?>
                        <?php $cityLetter = mb_substr($city->name, 0, 1, 'utf-8') ?>
                        <?php if ($cityLetter !== $letter): ?>
                            <?php $letter = $cityLetter ?>
                            <div class="col-12 js-search-hide">
                                <p class="mb-2 fw-600"><?= $letter ?></p>
                            </div>
                        <?php endif; ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2 js-search-item">
                            <a class="js-search-data" href="<?= Url::toSubdomain($city->alias) ?>">
                                <?= $city->name ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div><!-- .row -->
            </div><!-- .js-search -->
        <?php endif; ?>
        <?php $this->endCache() ?>
    <?php endif; ?>
</div><!-- .modal -->
<!-- / СПИСОК ГОРОДОВ -->

<!-- ВХОД РЕГИСТРАЦИЯ -->
<div class="modal modal-sm" id="login">
    <?php $formLogin = FormAjax::begin([
        'formName' => 'FormLogin',
        'action' => ['site/login'],
        'formId' => 'main-user-form-login'
    ]) ?>
        <?= $formLogin->inputText('email', 'Email') ?>
        <?= $formLogin->inputPassword('password', 'Пароль') ?>
        <?= $formLogin->checkbox('remember', 1, 'Запомнить меня') ?>
        <div class="row">
            <div class="col-auto mx-auto">
                <?= $formLogin->submit('Войти') ?>
            </div>
        </div>
    <?php FormAjax::end() ?>
    <p class="center em-9">Войти с помощью соцсетей</p>
    <div class="inwith">
        <span class="inwith-icon"><i class="i-f"></i></span>
        <span class="inwith-icon"><i class="i-vk"></i></span>
        <span class="inwith-icon"><i class="i-g"></i></span>
    </div>
    <div class="row">
        <div class="col-12 col-sm-auto">
            <p class="em-9 center">
                Впервые у нас?
                <br>
                <a data-fancybox onclick="$.fancybox.close();" href="#register">Зарегистрироваться</a>
            </p>
        </div>
        <div class="col-12 col-sm-auto ml-auto">
            <p class="em-9 center">
                Забыли пароль?
                <br>
                <a data-fancybox onclick="$.fancybox.close();" href="#register">Восстановить</a>
            </p>
        </div>
    </div>
</div>
<div class="modal modal-sm" id="register">
    <?php $formRegister = FormAjax::begin([
        'formName' => 'FormRegister',
        'action' => ['site/register'],
        'success' => '<strong>Регистрация прошла успешно!</strong><br>На Ваш e-mail отправлено сообщение, содержащее ссылку для подтверждения правильности e-mail адреса. Пожалуйста, перейдите по ссылке для активации аккаунта.'
    ]) ?>
        <?= $formRegister->inputText('username', 'Имя') ?>
        <?= $formRegister->inputText('email', 'Email') ?>
        <?= $formRegister->inputPassword('password', 'Пароль') ?>
        <?= $formRegister->inputPassword('password_repeat', 'Подтвердите пароль') ?>
        <?= $formRegister->checkbox('subscribe', 1, 'Подписаться на рассылку') ?>
        <?= $formRegister->submit('Зарегистрироваться') ?>
        <?= YII_ENV_DEV ? $formRegister->error('user') : '' ?>
    <?php FormAjax::end() ?>
    <p><small>При регистрации вы соглашаетесь с нашими Условиями пользования , а также Политикой Конфиденциальности и Cookie</small></p>
    <p class="center em-9">
        Уже есть аккаунт?
        <br>
        <a data-fancybox onclick="$.fancybox.close();" href="#login">Войти</a>
    </p>
</div>
<!-- / ВХОД РЕГИСТРАЦИЯ -->

<div class="modal modal-sm" id="activate-success">
    <p class="center">
        <strong>Ваш аккаунт успешно активирован!</strong>
        <br>
        Теперь Вы можете использовать логин (email) и пароль для входа в Личный кабинет.
    </p>
    <div class="row">
        <div class="col-auto mx-auto">
            <a class="btn btn-sm" data-fancybox onclick="$.fancybox.close();" href="#login">Войти</a>
        </div>
    </div>
</div>

<?php $this->trigger(FormAjax::EVENT_NOTIFY_MODALS) ?>

</div><!-- .d-none -->
<!-- / МОДАЛЬНЫЕ ОКНА -->

<script src="/js/main.depends.js?v=025"></script>
<script src="/js/main.js?v=040"></script>

<?php if (Yii::$app->session->getFlash('is-city', false)): ?>
<script>if ("function"==typeof window.isCity) { window.isCity() };</script>
<?php endif; ?>

<?php if (Yii::$app->session->getFlash('is-activated')): ?>
<script>$.fancybox.open({ src: '#activate-success'});</script>
<?php endif; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>