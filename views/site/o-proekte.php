<?php

use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'О проекте';
$this->params['description'] = 'Городской портал Без Кредитов - помогает жителям Москвы и Московской области выбрать правильную компанию по банкротству физических лиц и избавиться от долгов и начать свою жизнь с чистого лица.';
// $this->params['breadcrumbs'] = ['О проекте'];
$this->params['is-footer'] = false;
$this->params['is-header'] = false;

?>

<section class="section mt-auto">
    <h1 class="center mb-5">О проекте</h1>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-lg-5">
            <div class="col-auto">
                <a class="logo logo-lg" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                </a>
            </div>
            <div class="col-12 col-lg col-xl-7 my-5 my-lg-0">
                <h3 class="fw-400 center">
                    Городской портал Без Кредитов - помогает жителям г.&nbsp;<?= $city->name ?> выбрать правильную компанию по банкротству
                    физических лиц и избавиться от долгов и начать свою жизнь с чистого лица.
                </h3>
            </div>
        </div>
        <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
                <div class="row">
                    <div class="col-12 col-md-auto">
                        <p class="fw-600 em-12">
                            <span class="bb-primary pb-1">Наша миссия:</span>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <p class="em-12">Изменить страну к лучшему помогая людям и их семьям, попавшим в тяжёлое финансовое положение, вновь начать радоваться жизни освободившись от долгов.</p>
                    </div>
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<footer class="section mb-auto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto d-lg-none">
                <div class="d-flex align-items-center">
                    <div class="toggle-btn" data-toggle="#main-nav">
                        <i class="i-bars toggle-i"></i>
                        <p class="toggle-txt">Меню</p>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
        <?= $this->render('../layouts/-nav', ['city' => $city]) ?>
    </div>
</footer>

<p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>