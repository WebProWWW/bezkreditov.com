<?php

use app\helpers\Url;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $pagination yii\data\Pagination */
/* @var $offers app\models\UnicomOffer[] */
/* @var $paginationDisable bool */
/* @var $title string */

?>
<?php if (is_array($offers)): ?>
<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $title ?></h2>
        <?php foreach ($offers as $offer): ?>
            <?php $cardMoreId = 'credit-card-more-'.Yii::$app->security->generateRandomString(5); ?>
            <div class="cart mb-4">
                <div class="cart-body">
                    <div class="row">
                        <div class="col-12 col-md-auto">
                            <img class="img mx-auto" width="241" src="<?= $offer->logoUrl ?>">
                        </div><!-- .col -->
                        <div class="col-12 col-lg clip">
                            <h3 class="mb-0 clip">
                                <a href="javascript:;">
                                    <?= $offer->finmarketName ?>
                                </a>
                            </h3>
                            <p>
                                <span class="fw-600"><i class="i-star yellow"></i>&nbsp;<?= $offer->mfi->rating ?></span>
                                <span class="gray"><?= $offer->mfi->name ?></span>
                            </p>
                            <div class="row justify-content-between">
                                <div class="col-12 col-sm-auto">
                                    <p class="em-13 fw-600 mb-0">до&nbsp;<?= number_format($offer->maxLoanSum, 0, ',', '&nbsp;') ?>&nbsp;₽</p>
                                    <p class="gray">Кредитный лимит</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto">
                                    <p class="em-13 fw-600 mb-0"><?= $offer->minLoanPeriodUnit ?></p>
                                    <p class="gray">Срок</p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-auto">
                                    <p class="em-13 fw-600 mb-0">от <?= number_format($offer->minLoanRate, 1, ',', ' ') ?>%</p>
                                    <p class="gray">Ставка</p>
                                </div><!-- .col -->
                                <div class="col-12 col-md-auto">
                                    <a class="btn-default" href="javascript:;">Оформить</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-12 col-sm-auto order-md-2">
                            <p>Одобряют <?= $offer->loanProbability ?>% заявок</p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto order-md-3">
                            <p class="">
                                <a href="javascript:;">Моя вероятность</a>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto ml-auto order-md-4">
                            <p class="">
                                <a href="javascript:;">
                                    <i class="i-add em-11"></i> Сравнить
                                </a>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto order-md-1">
                            <p>
                                <a class="i-down-trans" data-toggle="#<?= $cardMoreId ?>">
                                    Подробнее
                                    <i class="i-down d-inline-block em-9"></i>
                                </a>
                            </p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div
                        class="js-debit-card-more"
                        id="<?= $cardMoreId ?>"
                        data-action="<?= Url::to(['site/offer-review', 'mfiId' => $offer->mfiId]) ?>"
                        style="display: none; overflow: hidden;"
                    >
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-12 col-md">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <span class="gray">Стоимость обслуживания:</span>
                                    </div>
                                    <div class="col-6 fw-600">
                                        <?= ($offer->serviceAuto)
                                            ? number_format($offer->serviceAuto, 0, ',', ' ') . ' ₽'
                                            : 'Бесплатно' ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <span class="gray">Время рассмотрения:</span>
                                    </div>
                                    <div class="col-6">
                                        <div class="editor fw-600">
                                            <?= $offer->approvalTermStr ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 gray">
                                        Требуемый рейтинг:
                                    </div>
                                    <div class="col-6 fw-600">
                                        -
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 gray">
                                        Возраст:
                                    </div>
                                    <div class="col-6 fw-600">
                                        <?= $offer->minAge ?> - <?= $offer->maxAge ?> лет
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 gray">
                                        Лицензия:
                                    </div>
                                    <div class="col-6 fw-600">
                                        <?= $offer->certificateOfCb ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-auto">
                                        <a class="btn-trsp" href="javascript:;">Перейти</a>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-auto d-none d-md-block mb-3 p-0">
                                <div class="divider-v"></div>
                            </div><!-- .col -->
                            <div class="col-12 col-md-5 col-xl-4">
                                <div class="js-debit-card-review">
                                    <img class="img-center" width="40" src="/img/loader.svg">
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- #card-more-info-* -->
                </div><!-- .cart-body -->
            </div>
        <?php endforeach; ?>
        <?php if (!empty($pagination)): ?>
            <div class="row justify-content-center my-3">
                <div class="col-auto">
                    <?= LinkPager::widget([
                        'pagination' => $pagination,
                    ]) ?>
                </div>
            </div><!-- .row -->
        <?php endif; ?>
    </div><!-- .container -->
</section><!-- .section -->
<?php endif; ?>
