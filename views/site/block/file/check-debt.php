<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$city = yii\helpers\ArrayHelper::getValue($this->params, 'city');

?>
<section class="section bg">
    <h2 class="h1 center">Проверьте свои долги, штрафы в режиме реального&nbsp;времени!</h2>
    <div class="container mb-4">
        <div class="cart">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 order-lg-2 z-2">
                        <div class="px-sm-3">
                            <h2 class="center my-4">Жители г.&nbsp;<?= $city->name ?> могут бесплатно проверить долги у&nbsp;судебных приставов по фамилии прямо у нас на портале</h2>
                            <div class="wall px-sm-5 mb-lg-4">
                                <p class="em-11 my-4">В режиме онлайн будут показаны задолженности по кредитам, штрафам ГИБДД, алиментам и другие исполнительные производства должника.</p>
                                <div class="row my-4">
                                    <div class="col-auto mx-auto">
                                        <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">Проверить долги</a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .wall -->
                        </div><!-- .px -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6 align-self-end order-lg-1 z-1">
                        <img class="img-center" width="400" style="margin-bottom: -3px" src="/img/block-img-2.jpg">
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->