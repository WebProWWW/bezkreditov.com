<?php

use app\models\Company;
use app\helpers\Url;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$city = ArrayHelper::getValue($this->params, 'city');

?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Лучшие компании по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row justify-content-center mb-3 js-tab-links">
            <div class="col-auto">
                <a class="tab-ln active" data-link="#block-company-tab-0" href="javascript:;">По количеству успешных дел</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#block-company-tab-1" href="javascript:;">По количеству отзывов</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#block-company-tab-2" href="javascript:;">По рейтингу</a>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="js-tab-contents">

            <?php $companies = Company::top(); ?>
            <?php foreach ($companies as $key => $category): ?>
                <div class="tab-content<?= $key === 0 ? ' active' : '' ?>" id="block-company-tab-<?= $key ?>" style="opacity: <?= $key === 0 ? '1' : '0' ?>">
                    <div class="row">
                        <?php foreach ($category as $company): ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="cart">
                                    <div class="cart-body px-xl-5">
                                        <div class="row align-items-center justify-content-center my-auto">
                                            <div class="col-auto">
                                                <div style="padding: 0 12px">
                                                    <img class="klogo" width="46" src="<?= $company->logoImg ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h4 class="fw-600"><?= $company->name ?></h4>
                                            </div>
                                        </div>
                                        <div class="cart-divider"></div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="percent-circle">
                                                            <span data-circle-percent="<?= $company->percent ?>"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p>Количество<br>успешных&nbsp;дел</p>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <p class="em-16 center" style="width: 70px">
                                                            <i class="i-star primary"></i> <?= $company->rate ?>
                                                        </p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .cart-body -->
                                    <div class="cart-footer">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <p class="em-9"><span class="date-bg"><?= $company->cases ?></span> - всего дел</p>
                                            </div>
                                            <div class="col-auto ml-auto">
                                                <a class="btn btn-sm btn-default px-2" href="<?= Url::to(['site/company', 'alias' => $company->alias, 'cpage' => 1]) ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </div><!-- .cart-footer -->
                                </div><!-- .cart -->
                            </div><!-- .col -->
                        <?php endforeach; ?>
                    </div><!-- .row -->
                </div>
            <?php endforeach; ?>
        </div><!-- .js-tab-contents -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="<?= Url::to(['site/company-list', 'page' => 1]) ?>">Все компании</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->