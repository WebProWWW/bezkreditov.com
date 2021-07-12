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
                <?php $cardMoreId = 'debit-card-more-'.Yii::$app->security->generateRandomString(5); ?>
                <div class="cart mb-4">
                    <div class="cart-body">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-auto">
                                <img class="img" width="241" src="<?= $offer->logoUrl ?>">
                            </div><!-- .col -->
                            <div class="col-12 col-md">
                                <h3>
                                    <a href="<?= $offer->encryptedRedirectUrl ?>" target="_blank">
                                        <?= $offer->finmarketName ?>
                                    </a>
                                </h3>
                                <p>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;<?= $offer->mfi->rating ?></span>
                                    <span class="gray"><?= $offer->mfi->name ?></span>
                                </p>
                                <div class="row justify-content-between">
                                    <div class="col-12 col-sm-auto">
                                        <p class="em-13 fw-600 mb-0">до <?= $offer->maxBonus ?>%</p>
                                        <p class="gray">Кэшбек</p>
                                    </div><!-- .col -->
                                    <div class="col-12 col-sm-auto">
                                        <p class="em-13 fw-600 mb-0">от <?= $offer->remainingPercentTo ?>%</p>
                                        <p class="gray">Процент на остаток</p>
                                    </div><!-- .col -->
                                    <div class="col-12 col-sm-auto">
                                        <p class="em-13 fw-600 mb-0">
                                            <?= $offer->serviceAuto ? $offer->serviceAuto.' ₽/год' :  'Бесплатно'?>
                                        </p>
                                        <p class="gray">Обслуживание</p>
                                    </div><!-- .col -->
                                    <div class="col-12 col-lg-auto">
                                        <a class="btn-default" href="<?= $offer->encryptedRedirectUrl ?>" target="_blank">Оформить</a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <p>
                            <a class="i-down-trans" data-toggle="#<?= $cardMoreId ?>">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
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
                                            <p class="gray">Обслуживание:</p>
                                        </div>
                                        <div class="col-12 col-xl-7">
                                            <div class="editor"><?= $offer->serviceCostComment ?></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-xl-5">
                                            <p class="gray">SMS-уведомления:</p>
                                        </div>
                                        <div class="col-12 col-xl-7">
                                            <p>
                                                <?= $offer->smsNotificationsCost ? $offer->smsNotificationsCost.' ₽/мес.' : 'Бесплатно' ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-xl-5">
                                            <p class="gray">Снятие наличных в банкоматах собственного банка:</p>
                                        </div>
                                        <div class="col-12 col-xl-7">
                                            <div class="editor">
                                                <?= $offer->ownBankCashWithdrawal ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-xl-5">
                                            <p class="gray">Снятие наличных в банкоматах других банков:</p>
                                        </div>
                                        <div class="col-12 col-xl-7">
                                            <div class="editor">
                                                <?= $offer->otherBankCashWithdrawal ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (is_array($offer->documentsForIssuance)): ?>
                                        <div class="row">
                                            <div class="col-12 col-xl-5">
                                                <p class="gray">Необходимые документы:</p>
                                            </div>
                                            <div class="col-12 col-xl-7">
                                                <div class="editor">
                                                    <ul>
                                                        <?php foreach ($offer->documentsForIssuance as $offerDocs): ?>
                                                            <li><?= $offerDocs ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
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