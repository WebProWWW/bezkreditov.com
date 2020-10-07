<?php

use app\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $content string */

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
    <link rel="stylesheet" href="css/main.depends.css?v=011">
    <link rel="stylesheet" href="css/main.css?v=013">
    <title>Без кредитов</title>
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
                <div class="col-auto mx-auto">
                    <a class="logo" href="<?= Url::home() ?>">
                        <span class="logo-txt">Без кредитов</span>
                        <span class="logo-stxt">Портал города Москвы по банкротству <br>физических лиц</span>
                    </a>
                    <p class="center em-9">
                    <span class="row justify-content-center no-gutters">
                        <span class="col-12 col-sm-auto mr-2">
                            <span class="fw-600">Выберите свой город:</span>
                        </span>
                        <span class="col-12 col-sm-auto">
                            <a data-fancybox href="#cities">Москва</a>
                        </span>
                    </span>
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-lg">
                    <?= $this->render('-nav') ?>
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
            <div class="col-auto mx-auto">
                <a class="logo" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                    <span class="logo-stxt">Портал города Москвы по банкротству <br>физических лиц</span>
                </a>
            </div><!-- .col -->
            <div class="col-12 col-lg">
                <?= $this->render('-nav') ?>
            </div><!-- .col -->
        </div><!-- .row -->
        <br>
        <p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>
    </div><!-- .container -->
</footer><!-- .section -->

<!-- МОДАЛЬНЫЕ ОКНА -->
<div class="d-none">

<!-- СПИСОК ГОРОДОВ -->
<div class="modal em-9" id="cities">
    <div class="row">
        <div class="col-12"><p class="mb-2 fw-600">А</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('abakan') ?>">Абакан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('azov') ?>">Азов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('aleksandrov') ?>">Александров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('aleksin') ?>">Алексин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('almetevsk') ?>">Альметьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('anapa') ?>">Анапа</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('angarsk') ?>">Ангарск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('anzhero-sudzhensk') ?>">Анжеро-Судженск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('apatity') ?>">Апатиты</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('arzamas') ?>">Арзамас</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('armavir') ?>">Армавир</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('arsenev') ?>">Арсеньев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('artem') ?>">Артем</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('arhangelsk') ?>">Архангельск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('asbest') ?>">Асбест</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('astrahan') ?>">Астрахань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('achinsk') ?>">Ачинск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Б</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('balakovo') ?>">Балаково</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('balahna') ?>">Балахна</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('balashiha') ?>">Балашиха</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('balashov') ?>">Балашов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('barnaul') ?>">Барнаул</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('bataysk') ?>">Батайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('belgorod') ?>">Белгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('belebey') ?>">Белебей</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('belovo') ?>">Белово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('belogorsk-amurskaya-oblast') ?>">Белогорск (Амурская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('beloretsk') ?>">Белорецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('belorechensk') ?>">Белореченск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('berdsk') ?>">Бердск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('berezniki') ?>">Березники</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('berezovskiy-sverdlovskaya-oblast') ?>">Березовский (Свердловская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('biysk') ?>">Бийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('birobidzhan') ?>">Биробиджан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('blagoveschensk-amurskaya-oblast') ?>">Благовещенск (Амурская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('bor') ?>">Бор</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('borisoglebsk') ?>">Борисоглебск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('borovichi') ?>">Боровичи</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('bratsk') ?>">Братск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('bryansk') ?>">Брянск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('bugulma') ?>">Бугульма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('budennovsk') ?>">Буденновск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('buzuluk') ?>">Бузулук</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('buynaksk') ?>">Буйнакск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">В</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('velikie-luki') ?>">Великие Луки</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('velikiy-novgorod') ?>">Великий Новгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('verhnyaya-pyshma') ?>">Верхняя Пышма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vidnoe') ?>">Видное</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vladivostok') ?>">Владивосток</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vladikavkaz') ?>">Владикавказ</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vladimir') ?>">Владимир</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('volgograd') ?>">Волгоград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('volgodonsk') ?>">Волгодонск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('volzhsk') ?>">Волжск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('volzhskiy') ?>">Волжский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vologda') ?>">Вологда</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('volsk') ?>">Вольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vorkuta') ?>">Воркута</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('voronezh') ?>">Воронеж</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('voskresensk') ?>">Воскресенск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('votkinsk') ?>">Воткинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vsevolozhsk') ?>">Всеволожск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vyborg') ?>">Выборг</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vyksa') ?>">Выкса</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('vyazma') ?>">Вязьма</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Г</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gatchina') ?>">Гатчина</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gelendzhik') ?>">Геленджик</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('georgievsk') ?>">Георгиевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('glazov') ?>">Глазов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gorno-altaysk') ?>">Горно-Алтайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('groznyy') ?>">Грозный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gubkin') ?>">Губкин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gudermes') ?>">Гудермес</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gukovo') ?>">Гуково</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('gus-hrustalnyy') ?>">Гусь-Хрустальный</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Д</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('derbent') ?>">Дербент</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('dzerzhinsk') ?>">Дзержинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('dimitrovgrad') ?>">Димитровград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('dmitrov') ?>">Дмитров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('dolgoprudnyy') ?>">Долгопрудный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('domodedovo') ?>">Домодедово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('donskoy') ?>">Донской</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('dubna') ?>">Дубна</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Е</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('evpatoriya') ?>">Евпатория</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('egorevsk') ?>">Егорьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('eysk') ?>">Ейск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ekaterinburg') ?>">Екатеринбург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('elabuga') ?>">Елабуга</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('elets') ?>">Елец</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('essentuki') ?>">Ессентуки</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ж</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zheleznogorsk-krasnoyarskiy-kray') ?>">Железногорск (Красноярский край)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zheleznogorsk-kurskaya-oblast') ?>">Железногорск (Курская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zhigulevsk') ?>">Жигулевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zhukovskiy') ?>">Жуковский</a></div>
        <div class="col-12"><p class="mb-2 fw-600">З</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zarechnyy') ?>">Заречный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zelenogorsk') ?>">Зеленогорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zelenodolsk') ?>">Зеленодольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('zlatoust') ?>">Златоуст</a></div>
        <div class="col-12"><p class="mb-2 fw-600">И</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ivanovo') ?>">Иваново</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ivanteevka') ?>">Ивантеевка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('izhevsk') ?>">Ижевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('izberbash') ?>">Избербаш</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('irkutsk') ?>">Иркутск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('iskitim') ?>">Искитим</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ishim') ?>">Ишим</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ishimbay') ?>">Ишимбай</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yoshkar-ola') ?>">Йошкар-Ола</a></div>
        <div class="col-12"><p class="mb-2 fw-600">К</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kazan') ?>">Казань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kaliningrad') ?>">Калининград</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kaluga') ?>">Калуга</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kamensk-uralskiy') ?>">Каменск-Уральский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kamensk-shahtinskiy') ?>">Каменск-Шахтинский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kamyshin') ?>">Камышин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kansk') ?>">Канск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kaspiysk') ?>">Каспийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kemerovo') ?>">Кемерово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kerch') ?>">Керчь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kineshma') ?>">Кинешма</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kirishi') ?>">Кириши</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kirov-kirovskaya-oblast') ?>">Киров (Кировская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kirovo-chepetsk') ?>">Кирово-Чепецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kiselevsk') ?>">Киселевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kislovodsk') ?>">Кисловодск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('klin') ?>">Клин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('klintsy') ?>">Клинцы</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kovrov') ?>">Ковров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kogalym') ?>">Когалым</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kolomna') ?>">Коломна</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('komsomolsk-na-amure') ?>">Комсомольск-на-Амуре</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kopeysk') ?>">Копейск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('korolev') ?>">Королев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kostroma') ?>">Кострома</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kotlas') ?>">Котлас</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnogorsk') ?>">Красногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnodar') ?>">Краснодар</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnokamensk') ?>">Краснокаменск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnokamsk') ?>">Краснокамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnoturinsk') ?>">Краснотурьинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krasnoyarsk') ?>">Красноярск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kropotkin') ?>">Кропоткин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('krymsk') ?>">Крымск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kstovo') ?>">Кстово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kuznetsk') ?>">Кузнецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kumertau') ?>">Кумертау</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kungur') ?>">Кунгур</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kurgan') ?>">Курган</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kursk') ?>">Курск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('kyzyl') ?>">Кызыл</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Л</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('labinsk') ?>">Лабинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('leninogorsk') ?>">Лениногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('leninsk-kuznetskiy') ?>">Ленинск-Кузнецкий</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lesosibirsk') ?>">Лесосибирск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lipetsk') ?>">Липецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('liski') ?>">Лиски</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lobnya') ?>">Лобня</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lysva') ?>">Лысьва</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lytkarino') ?>">Лыткарино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('lyubertsy') ?>">Люберцы</a></div>
        <div class="col-12"><p class="mb-2 fw-600">М</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('magadan') ?>">Магадан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('magnitogorsk') ?>">Магнитогорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('maykop') ?>">Майкоп</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mahachkala') ?>">Махачкала</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mezhdurechensk') ?>">Междуреченск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('meleuz') ?>">Мелеуз</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('miass') ?>">Миасс</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mineralnye-vody') ?>">Минеральные Воды</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('minusinsk') ?>">Минусинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mihaylovka') ?>">Михайловка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mihaylovsk-stavropolskiy-kray') ?>">Михайловск (Ставропольский край)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('michurinsk') ?>">Мичуринск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain() ?>">Москва</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('murmansk') ?>">Мурманск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('murom') ?>">Муром</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('mytischi') ?>">Мытищи</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Н</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('naberezhnye-chelny') ?>">Набережные Челны</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nazarovo') ?>">Назарово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nazran') ?>">Назрань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nalchik') ?>">Нальчик</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('naro-fominsk') ?>">Наро-Фоминск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nahodka') ?>">Находка</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nevinnomyssk') ?>">Невинномысск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('neryungri') ?>">Нерюнгри</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('neftekamsk') ?>">Нефтекамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nefteyugansk') ?>">Нефтеюганск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nizhnevartovsk') ?>">Нижневартовск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nizhnekamsk') ?>">Нижнекамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nizhniy-novgorod') ?>">Нижний Новгород</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nizhniy-tagil') ?>">Нижний Тагил</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novoaltaysk') ?>">Новоалтайск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novokuznetsk') ?>">Новокузнецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novokuybyshevsk') ?>">Новокуйбышевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novomoskovsk') ?>">Новомосковск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novorossiysk') ?>">Новороссийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novosibirsk') ?>">Новосибирск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novotroitsk') ?>">Новотроицк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novouralsk') ?>">Новоуральск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novocheboksarsk') ?>">Новочебоксарск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novocherkassk') ?>">Новочеркасск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novoshahtinsk') ?>">Новошахтинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('novyy-urengoy') ?>">Новый Уренгой</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('noginsk') ?>">Ногинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('norilsk') ?>">Норильск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('noyabrsk') ?>">Ноябрьск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('nyagan') ?>">Нягань</a></div>
        <div class="col-12"><p class="mb-2 fw-600">О</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('obninsk') ?>">Обнинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('odintsovo') ?>">Одинцово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ozersk-chelyabinskaya-oblast') ?>">Озерск (Челябинская область)</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('oktyabrskiy') ?>">Октябрьский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('omsk') ?>">Омск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('orel') ?>">Орел</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('orenburg') ?>">Оренбург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('orekhovo-zuevo') ?>">Орехово-Зуево</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('orsk') ?>">Орск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">П</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pavlovo') ?>">Павлово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pavlovskiy-posad') ?>">Павловский Посад</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('penza') ?>">Пенза</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pervouralsk') ?>">Первоуральск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('perm') ?>">Пермь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('petrozavodsk') ?>">Петрозаводск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('petropavlovsk-kamchatskiy') ?>">Петропавловск-Камчатский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('podolsk') ?>">Подольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('polevskoy') ?>">Полевской</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('prokopevsk') ?>">Прокопьевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('prohladnyy') ?>">Прохладный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pskov') ?>">Псков</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pushkino') ?>">Пушкино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('pyatigorsk') ?>">Пятигорск</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Р</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ramenskoe') ?>">Раменское</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('revda') ?>">Ревда</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('reutov') ?>">Реутов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('rzhev') ?>">Ржев</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('roslavl') ?>">Рославль</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('rossosh') ?>">Россошь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('rostov-na-donu') ?>">Ростов-на-Дону</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('rubtsovsk') ?>">Рубцовск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('rybinsk') ?>">Рыбинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ryazan') ?>">Рязань</a></div>
        <div class="col-12"><p class="mb-2 fw-600">С</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('salavat') ?>">Салават</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('salsk') ?>">Сальск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('samara') ?>">Самара</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sankt-peterburg') ?>">Санкт-Петербург</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('saransk') ?>">Саранск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sarapul') ?>">Сарапул</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('saratov') ?>">Саратов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sarov') ?>">Саров</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('svobodnyy') ?>">Свободный</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sevastopol') ?>">Севастополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('severodvinsk') ?>">Северодвинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('seversk') ?>">Северск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sergiev-posad') ?>">Сергиев Посад</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('serov') ?>">Серов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('serpuhov') ?>">Серпухов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sertolovo') ?>">Сертолово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sibay') ?>">Сибай</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('simferopol') ?>">Симферополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('slavyansk-na-kubani') ?>">Славянск-на-Кубани</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('smolensk') ?>">Смоленск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('solikamsk') ?>">Соликамск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('solnechnogorsk') ?>">Солнечногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sosnovyy-bor') ?>">Сосновый Бор</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sochi') ?>">Сочи</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('stavropol') ?>">Ставрополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('staryy-oskol') ?>">Старый Оскол</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('sterlitamak') ?>">Стерлитамак</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('stupino') ?>">Ступино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('surgut') ?>">Сургут</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('syzran') ?>">Сызрань</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('syktyvkar') ?>">Сыктывкар</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Т</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('taganrog') ?>">Таганрог</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tambov') ?>">Тамбов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tver') ?>">Тверь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('timashevsk') ?>">Тимашевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tihvin') ?>">Тихвин</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tihoretsk') ?>">Тихорецк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tobolsk') ?>">Тобольск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tolyatti') ?>">Тольятти</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tomsk') ?>">Томск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('troitsk') ?>">Троицк</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tuapse') ?>">Туапсе</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tuymazy') ?>">Туймазы</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tula') ?>">Тула</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('tyumen') ?>">Тюмень</a></div>
        <div class="col-12"><p class="mb-2 fw-600">У</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('uzlovaya') ?>">Узловая</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ulan-ude') ?>">Улан-Удэ</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ulyanovsk') ?>">Ульяновск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('urus-martan') ?>">Урус-Мартан</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('usole-sibirskoe') ?>">Усолье-Сибирское</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ussuriysk') ?>">Уссурийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ust-ilimsk') ?>">Усть-Илимск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('ufa') ?>">Уфа</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('uhta') ?>">Ухта</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ф</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('feodosiya') ?>">Феодосия</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('fryazino') ?>">Фрязино</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Х</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('habarovsk') ?>">Хабаровск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('hanty-mansiysk') ?>">Ханты-Мансийск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('hasavyurt') ?>">Хасавюрт</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('himki') ?>">Химки</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ч</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chaykovskiy') ?>">Чайковский</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chapaevsk') ?>">Чапаевск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('cheboksary') ?>">Чебоксары</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chelyabinsk') ?>">Челябинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('cheremhovo') ?>">Черемхово</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('cherepovets') ?>">Череповец</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('cherkessk') ?>">Черкесск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chernogorsk') ?>">Черногорск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chekhov') ?>">Чехов</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chistopol') ?>">Чистополь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('chita') ?>">Чита</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ш</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('shadrinsk') ?>">Шадринск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('shali') ?>">Шали</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('shahty') ?>">Шахты</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('shuya') ?>">Шуя</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Щ</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('schekino') ?>">Щекино</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('schelkovo') ?>">Щелково</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Э</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('elektrostal') ?>">Электросталь</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('elista') ?>">Элиста</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('engels') ?>">Энгельс</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Ю</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yuzhno-sahalinsk') ?>">Южно-Сахалинск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yurga') ?>">Юрга</a></div>
        <div class="col-12"><p class="mb-2 fw-600">Я</p></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yakutsk') ?>">Якутск</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yalta') ?>">Ялта</a></div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-2"><a href="<?= Url::toSubdomain('yaroslavl') ?>">Ярославль</a></div>
    </div><!-- .row -->
</div><!-- .modal -->
<!-- / СПИСОК ГОРОДОВ -->

</div><!-- .d-none -->
<!-- / МОДАЛЬНЫЕ ОКНА -->

<script src="js/main.depends.js?v=011"></script>
<script src="js/main.js?v=011"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>