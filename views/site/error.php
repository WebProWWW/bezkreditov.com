<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->params['is-footer'] = false;
$this->params['is-header'] = false;

?>
<section class="section mt-auto">
    <div class="container">
        <p class="center h1 fw-400">404</p>
        <p class="fw-400 h3 center">Страница не найдена</p>
        <div class="row justify-content-center">
            <div class="col-auto mb-5">
                <a class="btn" href="<?= Url::home() ?>">На главную</a>
            </div>
            <div class="col-12"></div>
            <div class="col-auto">
                <a class="logo logo-lg" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                </a>
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