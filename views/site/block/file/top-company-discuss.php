<?php

use app\helpers\Url;
use app\models\Company;
use app\helpers\StringHelper;
use yii\helpers\ArrayHelper;

$city = ArrayHelper::getValue($this->params, 'city');

?>
<section class="section bg">
    <div class="container">

        <h2 class="h1 center">Часто обсуждаемые компании по банкроству в&nbsp;г.&nbsp;<?= $city->name ?></h2>

        <!--
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">Новые</a>
            </div>
            <div class="col-auto">
                <a class="tab-ln">Обсуждаемые сегодня</a>
            </div>
            <div class="col-auto">
                <a class="tab-ln">Топ за все время</a>
            </div>
        </div>
        -->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="my-auto">
                            <h3>Желаете оставить отзыв?</h3>
                            <p>Поделитесь информацией о компании, которая поможет определиться людям с выбором.</p>
                        </div>
                    </div><!-- .cart-body -->
                    <a class="btn cart-full-btn" href="<?= Url::to(['site/company-list', 'page' => 1]) ?>">
                        <i class="i-plus cart-full-btn-i"></i>
                        Добавить отзыв<br>о компании
                    </a>
                    <div>

                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <?php  $companies = Company::top()[1]; ?>
            <?php foreach ($companies as $key => $company): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3 class="center"><?= $company->name ?></h3>
                            <?php $firstComment = $company->comments[0] ?>
                            <p><?= StringHelper::truncate($firstComment->text, 120); ?></p>
                        </div><!-- .cart-body -->
                        <div class="cart-footer">
                            <div class="d-flex no-gutters align-items-center">
                                <div class="col">
                                    <p>
                                        <?php for ($star=1; $star <= 5; $star++ ): ?>
                                            <?php $isMuted = $firstComment->rate < $star;  ?>
                                            <i class="i-star <?= $isMuted ? 'mutted' : 'primary' ?>"></i>
                                        <?php endfor; ?>
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <a
                                        class="btn btn-sm btn-default"
                                        href="<?= Url::to([
                                            'site/company',
                                            'alias' => $company->alias,
                                            'cpage' => 1
                                        ]) ?>"
                                    >
                                        Читать отзыв
                                    </a>
                                </div>
                            </div>
                        </div><!-- .cart-footer -->
                    </div><!-- .cart -->
                </div><!-- .col -->
                <?php if ($key === 4) break; ?>
            <?php endforeach; ?>
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->