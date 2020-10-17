<?php

use app\helpers\Url;
use app\models\City;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */
/* @var $cities City[] */
/* @var $city City */

$city = $this->params['city'];
$description = ArrayHelper::getValue($this->params, 'description', '');

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.depends.css?v=016">
    <link rel="stylesheet" href="/css/main.css?v=021">
    <title><?= $this->title ? Html::encode($this->title) : 'Без кредитов' ?></title>
    <meta name="description" content="<?= $description ?>">
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

<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-auto">
                    <div class="d-flex">
                        <div class="mr-2">
                            <a class="i-circle-blue-ln" href="">
                                <i class="i-vk"></i>
                            </a>
                        </div>
                        <div>
                            <a class="i-circle-dblue-ln" href="">
                                <i class="i-f"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col pl-3">
                    <p>Отзывы людей прошедших банкротство физических лиц - каждый день!</p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-top -->
    <div class="header-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                    <a class="logo" href="<?= Url::home() ?>">
                        <span class="logo-txt">Без кредитов</span>
                        <span class="logo-stxt">Портал города <?= $city->name ?> по банкротству физических&nbsp;лиц</span>
                    </a>
                    <p class="center em-9">
                        <span class="row justify-content-center no-gutters">
                            <span class="col-12 col-sm-auto mr-2">
                                <span class="fw-600">Выберите свой город:</span>
                            </span>
                            <span class="col-12 col-sm-auto">
                                <a data-fancybox href="#cities"><?= $city->name ?></a>
                            </span>
                        </span>
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-lg">
                    <?= $this->render('-nav', ['city' => $city]) ?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-body -->
</header>

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

<footer class="section">
    <div class="container">
        <div class="row">
            <?php if (ArrayHelper::getValue($this->params, 'is-footer-logo', true)): ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                    <a class="logo" href="<?= Url::home() ?>">
                        <span class="logo-txt">Без кредитов</span>
                        <span class="logo-stxt">Портал города <?= $city->name ?> по банкротству физических&nbsp;лиц</span>
                    </a>
                </div><!-- .col -->
            <?php endif; ?>
            <div class="col-12 col-lg">
                <?= $this->render('-nav', ['city' => $city]) ?>
            </div><!-- .col -->
        </div><!-- .row -->
        <br>
        <p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>
    </div><!-- .container -->
</footer><!-- .section -->

<!-- МОДАЛЬНЫЕ ОКНА -->
<div class="d-none">


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

</div><!-- .d-none -->
<!-- / МОДАЛЬНЫЕ ОКНА -->

<script src="/js/main.depends.js?v=015"></script>
<script src="/js/main.js?v=016"></script>

<?php if (Yii::$app->session->getFlash('is-city', false)): ?>
<script>if ("function"==typeof window.isCity) { window.isCity() };</script>
<?php endif; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>