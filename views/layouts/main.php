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
    <link rel="stylesheet" href="/css/main.depends.css?v=031">
    <link rel="stylesheet" href="/css/main.css?v=059">
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
            <div class="row align-items-center no-gutters">
                <!--
                <div class="col-12 col-md-auto">
                    <img class="img" width="130" src="/img/logo/spishudolgi.svg">
                </div>
                <div class="col-12 col-md px-md-3">
                    <p class="em-9">
                        Банкротство физических лиц со скидкой 25% по промокоду «Без кредитов»
                        <a class="btn-trsp btn-sm" style="display: inline-block; margin: 5px 0; width: auto;" target="blank" href="https://spishudolgi.ru">Заказать&nbsp;банкротство</a>
                    </p>
                </div>
                -->
                <div class="col-auto ml-auto">
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
    <div class="header-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto">
                    <div class="row">
                        <div class="col-auto mx-auto">
                            <a class="logo" href="<?= Url::home() ?>">
                                <span class="logo-txt">Без кредитов</span>
                                <span class="logo-stxt">Помогаем избавиться от долгов</span>
                            </a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p class="center mb-4 em-9">
                        <span class="row justify-content-center no-gutters">
                            <span class="col-12 col-sm-auto mr-2">
                                <span class="fw-600">Выберите свой город:</span>
                            </span>
                            <span class="col-12 col-sm-auto">
                                <a data-fancybox href="#cities"><?= $city->name ?></a>
                            </span>
                        </span>
                    </p>
                    <div class="row justify-content-center no-gutters">
                        <div class="col-auto mr-3 d-lg-none">
                            <div class="d-flex align-items-center">
                                <div class="toggle-btn" data-toggle="#header-nav">
                                    <i class="i-bars toggle-i"></i>
                                    <p class="toggle-txt">Меню</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                                <span class="row no-gutters justify-content-center align-items-center">
                                    <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                                    <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                                </span>
                            </a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col -->
                <div class="col-12 col-lg">
                    <?= $this->render('-nav', ['city' => $city, 'id' => 'header-nav']) ?>
                </div><!-- .col -->
            </div><!-- .row -->
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
<script src="/js/main.js?v=039"></script>

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