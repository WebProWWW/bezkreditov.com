<?php

use app\helpers\Url;
use app\widgets\LinkPager;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $pagination yii\data\Pagination */
/* @var $offers app\models\UnicomOffer[] */
/* @var $paginationDisable bool */
/* @var $title string */
/* @var $pageNum int */
/* @var $loanAlias string|null */
/* @var $alias string|null */

$pageNum = empty($pageNum) ? 1 : (int) $pageNum;

?>
<?php if (is_array($offers) && count($offers)): ?>
<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $title ?></h2>
        <?php foreach ($offers as $offer): ?>
            <?php
                $cardMoreId = 'debit-card-more-'.Yii::$app->security->generateRandomString(5);
                $offerUtl = Url::to(['site/offer', 'id'=> $offer->id]);
            ?>
            <div class="cart mb-4">
                <div class="cart-body">
                    <div class="row align-items-center">
                        <div class="col-12 col-xl-4">
                            <div class="row align-items-center flex-sm-nowrap">
                                <div class="col-12 col-sm-auto mx-auto">
                                    <img class="img img-circle mx-auto" width="60" src="<?= $offer->roundLogo ?>">
                                </div><!-- .col -->
                                <div class="col-12 col-sm clip">
                                    <h3 class="clip mb-0">
                                        <a
                                            href="javascript:;"
                                            data-offer
                                            data-min-sum="<?= $offer->minLoanSum ?>"
                                            data-max-sum="<?= $offer->maxLoanSum ?>"
                                            data-src="#offer-modal"
                                            data-url="<?= Url::to(['site/offer', 'id' => $offer->id]) ?>"
                                            data-id="<?= $offer->id ?>"
                                            data-title="<?= Html::encode($offer->finmarketName) ?>"
                                            data-logo="<?= $offer->roundLogo ?>"
                                        ><?= $offer->finmarketName ?></a>
                                    </h3>
                                    <p>
                                        <span class="fw-600"><i class="i-star yellow"></i>&nbsp;<?= $offer->mfi->rating ?></span>
                                        <span class="gray"><?= $offer->mfi->name ?></span>
                                    </p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-auto ml-xl-auto">
                            <p class="em-13 fw-600 mb-0">от&nbsp;<?= number_format($offer->minLoanSum, 0, ',', '&nbsp;') ?>&nbsp;₽</p>
                            <p class="gray">Сумма</p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto mx-auto">
                            <p class="em-13 fw-600 mb-0"><?= $offer->minLoanPeriodUnit ?></p>
                            <p class="gray">Срок</p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto">
                            <p class="em-13 fw-600 mb-0">от&nbsp;<?= number_format($offer->loanRate, 1, ',', '&nbsp;') ?>&nbsp;%</p>
                            <p class="gray">Ставка в год</p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto ml-auto">
                            <a
                                class="btn-default"
                                href="javascript:;"
                                data-offer
                                data-min-sum="<?= $offer->minLoanSum ?>"
                                data-max-sum="<?= $offer->maxLoanSum ?>"
                                data-src="#offer-modal"
                                data-url="<?= Url::to(['site/offer', 'id' => $offer->id]) ?>"
                                data-id="<?= $offer->id ?>"
                                data-title="<?= Html::encode($offer->finmarketName) ?>"
                                data-logo="<?= $offer->roundLogo ?>"
                            >Оформить</a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <div class="row">
                        <div class="col-12 col-sm-auto order-md-2">
                            <p>Одобряют <?= $offer->loanProbability ?>% заявок</p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto order-md-3">
                            <p>
                                <a href="javascript:;">
                                    Моя вероятность
                                </a>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-sm-auto ml-auto order-md-4">
                            <p>
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
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Платеж в месяц:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <p class="fw-600">
                                            от&nbsp;<?= number_format($offer->minLoanMonthlyPayment, 0, ',', '&nbsp;') ?>&nbsp;₽
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Время рассмотрения:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <div class="editor"><?= $offer->approvalTermStr ?></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Требуемый рейтинг:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <p><?= $offer->minScoringPoints ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Условия получения:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <p>Перевод на банковский счет</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Возраст:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <p><?= $offer->minAge.' - '.$offer->maxAge ?> лет</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-xl-5">
                                        <p class="gray">Лицензия:</p>
                                    </div>
                                    <div class="col-12 col-xl-7">
                                        <p><?= $offer->certificateOfCb ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-auto">
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
