<?php

use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'О проекте';
$this->params['description'] = 'Городской портал Без Кредитов - помогает жителям Москвы и Московской области выбрать правильную компанию по банкротству физических лиц и избавиться от долгов и начать свою жизнь с чистого лица.';
$this->params['breadcrumbs'] = ['О проекте'];
$this->params['is-footer'] = false;
$this->params['is-header'] = true;

?>

<section class="section mt-auto">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-md-3">
                <p class="fw-600 em-12 md-right">
                    <span class="bb-primary pb-1">О проекте:</span>
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md">
                <p class="em-12">
                    Городской портал «Без Кредитов» - учим финансовой грамотности, помогаем правильно брать кредиты и избавиться от долгов если вы попали в сложную ситуацию.
                </p>
            </div>
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 col-md-3">
                <p class="fw-600 em-12 md-right">
                    <span class="bb-primary pb-1">Наша миссия:</span>
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md">
                <p class="em-12">Изменить страну к лучшему помогая людям и их семьям, попавшим в тяжёлое финансовое положение, вновь начать радоваться жизни освободившись от долгов.</p>
            </div>
        </div><!-- .row -->

        <div class="row mt-3">
            <div class="col-auto mx-auto">
                <a class="btn-default" href="<?= Url::home() ?>">На главную</a>
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<p class="center mt-auto"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>