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
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-auto">
                <a class="logo logo-lg" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                </a>
            </div>
            <div class="col-12 col-lg col-xl-7">
                <h3 class="fw-400 center my-5 m-lg-0 mb-lg-3">
                    Городской портал Без Кредитов - помогает жителям г.&nbsp;<?= $city->name ?> выбрать правильную компанию по банкротству
                    физических лиц и избавиться от долгов и начать свою жизнь с чистого лица.
                </h3>
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<footer class="section mb-auto">
    <div class="container">
        <?= $this->render('../layouts/-nav', ['city' => $city]) ?>
    </div>
</footer>

<p class="center"><small>&copy; Без кредитов. При воспроизведении редакционных материалов сайта обязательна установка активной гиперссылки на источник - страницу с этой публикацией на безкредитов.рф</small></p>