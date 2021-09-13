<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->params['is-footer'] = false;
$this->params['is-header'] = false;

?>
<section class="section my-auto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="logo logo-lg" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                </a>
            </div>
        </div>
        <p class="center em-30">
            <span>&#128679;</span>
<!--            ограждение &#128679;-->
<!--            ключ &#128295;-->
        </p>
        <p class="fw-400 h3 center">На сайте ведутся технические работы</p>
    </div><!-- .container -->
</section><!-- .section -->