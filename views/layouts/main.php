<?php

use app\models\City;
use app\models\User;
use app\models\Region;
use app\assets\MainAsset;
use app\helpers\Url;
use app\widgets\FormAjax;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $content string */
/* @var $cities City[] */
/* @var $city City */
/* @var $user User */

MainAsset::register($this);

$cities = City::allCities();
ArrayHelper::setValue($this->params, 'cities', $cities);

$regions = Region::findAllRegions();
ArrayHelper::setValue($this->params, 'regions', $regions);

$city = $this->params['city'];

$description = ArrayHelper::getValue($this->params, 'description', '');
$description = StringHelper::truncate($description, 160);

$title = $this->title ? Html::encode($this->title) : 'Без кредитов';

$urlBase = Url::base(true);
$currentUrl = ArrayHelper::getValue($this->params, 'currentUrl', $urlBase);

$user = Yii::$app->user->isGuest ? null : Yii::$app->user->identity;

$this->registerJsVar('appModel', [
    'city' => $city,
    'cities' => $cities,
    'regions' => $regions,
    'homeUrl' => Url::home(),
]);
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

<?= $this->render('-main-mobile-nav', ['city' => $city]) ?>

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
                                    Городской портал «Без Кредитов» - учим финансовой
                                    <br>
                                    грамотности, помогаем правильно брать кредиты и
                                    <br>
                                    избавиться от долгов если вы попали в сложную ситуацию.
                                    <!--
                                    Городской портал «Без Кредитов» - помогает жителям
                                    <br>
                                    избавиться от долгов и начать свою жизнь с чистого лица
                                    -->
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

                <div class="col-auto d-none d-sm-block pr-3 mr-xl-auto">
                    <div class="toggle-btn" data-toggle="#header-nav">
                        <i class="i-search toggle-i em-11"></i>
                    </div>
                </div>

                <div class="col-auto d-xl-none">
                    <div class="toggle-btn" data-mnav-open>
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
            <?= $this->render('-main-nav', ['city' => $city]) ?>
        </div><!-- .container -->
    </div><!-- .header-body -->
</header>
<?php endif; ?>

<?php if ($breadcrumbs = ArrayHelper::getValue($this->params, 'breadcrumbs', [])): ?>
<div class="divider"></div>

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
<?php endif; ?>

<?= $content ?>

<?php if (ArrayHelper::getValue($this->params, 'is-footer', true)): ?>
<footer class="section mt-auto">
    <div class="container">
        <nav class="nav justify-content-lg-between">
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="<?= Url::toView('o-proekte') ?>">
                О проекте
            </a>
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="<?= Url::toView('obratnaya-svyaz') ?>">
                Контакты
            </a>
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="javascript:;">
                Карта сайта
            </a>
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="/reklama-na-sajte.pdf" target="_blank">
                Реклама на сайте
            </a>
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="/politika-konfidencialnosti.pdf" target="_blank">
                Политика конфиденциальности
            </a>
            <a class="nav-ln col-12 col-sm-6 col-md-4 col-lg-auto" href="/soglashenie-oferta.pdf" target="_blank">
                Пользовательское соглашение
            </a>
        </nav>
    </div><!-- .container -->
    <div class="divider"></div>
    <div class="container">
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
</div><!-- .modal -->


<!-- ВХОД РЕГИСТРАЦИЯ АКЦИВАЦИЯ -->
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

<!-- ОБРАТНЫЙ ЗВОНОК -->
<div class="modal modal-sm" id="callback">
    <?php $form = FormAjax::begin([
        'formName' => 'FormCallback',
        'action' => ['site/callback'],
    ]) ?>
    <?= $form->inputHidden('title', 'Обратный звонок') ?>
    <?= $form->inputText('name', null, 'Ваше имя') ?>
    <?= $form->inputText('phone', null, 'Ваш номер телефона', '+7-999-999-99-99') ?>
    <?= $form->submit('Отправить') ?>
    <p class="em-9">
        Нажимая кнопку «Отправить», вы принимаете условия
        <a href="javascript:;">Политики обработки персональных данных.</a>
    </p>
    <?php FormAjax::end() ?>
</div><!-- .modal -->

<?php $this->trigger(FormAjax::EVENT_NOTIFY_MODALS) ?>

</div><!-- .d-none -->
<!-- / МОДАЛЬНЫЕ ОКНА -->

<?php $this->endBody() ?>

<?php if (Yii::$app->session->getFlash('is-city', false)): ?>
    <script>if ("function"==typeof window.isCity) { window.isCity() };</script>
<?php endif; ?>

<?php if (Yii::$app->session->getFlash('is-activated')): ?>
    <script>$.fancybox.open({ src: '#activate-success'});</script>
<?php endif; ?>

</body>
</html>
<?php $this->endPage() ?>