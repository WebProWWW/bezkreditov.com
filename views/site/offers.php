<?php

use yii\helpers\ArrayHelper;
use app\assets\MainAsset;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model app\models\Unicom */
/* @var $tags app\models\UnicomTag[] */
/* @var $tagTiles  app\models\UnicomTag */
/* @var $popTags  app\models\UnicomTag[] */
/* @var $alias string|null */

$this->title = $model->title;
$this->params['description'] = $model->page->description;
$this->params['breadcrumbs'] = $model->breadcrumbs;

$tags = ArrayHelper::getValue($model, 'page.linkingFields', []);

$tagTiles = null;
$popTags = [];

foreach ($tags as $tag) {
    if ($tag->displayLocation === 'tag_tiles') {
        $tagTiles = $tag;
    }
    if ($tag->displayLocation === 'popular_offers') {
        $popTags[] = $tag;
    }
}

$offerJs = '/js/vue-app-offer.min.js?rnd=' . time();

$this->registerJsFile($offerJs, ['depends' => MainAsset::class]);

?>

<section class="section" style="position: relative; overflow: hidden; background: <?= $model->promoColor ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1><?= $model->pageTitle ?></h1>
                <?= $model->pageDescription ?>
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-promo" src="<?= $model->imgPromo ?>" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <?php if ($model->isFilterForm): ?>
            <div class="row">
                <div class="col-12 col-lg">
                    <label class="label">Сумма кредита, ₽</label>
                    <select class="input">
                        <option selected>от 50 000 ₽</option>
                        <option>от 100 000 ₽</option>
                        <option>от 150 000 ₽</option>
                        <option>от 200 000 ₽</option>
                        <option>от 300 000 ₽</option>
                        <option>от 500 000 ₽</option>
                    </select>
                </div><!-- .col -->
                <div class="col-12 col-lg">
                    <label class="label">Срок кредита</label>
                    <select class="input">
                        <option selected>Любой</option>
                        <option>30 дней</option>
                        <option>50 дней</option>
                        <option>90 дней</option>
                        <option>120 дней</option>
                    </select>
                </div><!-- .col -->
                <div class="col-12 col-lg-auto">
                    <label class="label d-none d-lg-block">&nbsp;</label>
                    <button class="btn-default">Показать</button>
                </div><!-- .col -->
            </div><!-- .row -->
        <?php endif; ?>

        <?php if ($tagTiles): ?>
            <div class="row no-gutters" style="margin: 0 -8px">
                <?php foreach ($tagTiles->anchors as $anchor): ?>
                    <?php if ($anchor->pathFirst === $model->loanAlias): ?>
                        <div class="col-auto" style="margin: 0 8px">
                            <a
                                class="btn-trsp btn-sm px-2 <?= ($anchor->path === $model->path) ? 'active' : '' ?>"
                                style="font-size: .75em"
                                href="<?= $anchor->path ?>-1.html"
                            >
                                <?= $anchor->name ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div><!-- .row -->
        <?php endif; ?>
    </div><!-- .container -->
</section><!-- .section -->

<?= $this->render('offers-list-' . $model->loanType, [
    'alias' => $model->alias,
    'loanAlias' => $model->loanAlias,
    'pageNum' => $model->pageNum,
    'title' => 'Рекомендуем '.$model->page->recommendedKey,
    'offers' => $model->offersRecommend,
]) ?>

<?= $this->render('offers-list-' . $model->loanType, [
    'alias' => $model->alias,
    'loanAlias' => $model->loanAlias,
    'pageNum' => $model->pageNum,
    'title' => 'Подобрать '.$model->page->selectedKey,
    'pagination' => $model->pagination,
    'offers' => $model->offers,
]) ?>

<?= $this->render('offers-banner-' . $model->loanType) ?>

<?php if ($model->isReviews && count($model->reviews)): ?>
    <section class="section bg">
        <div class="container">
            <h2 class="h1"><?= $model->page->offerWallReviewsBlockHeader ?></h2>
            <div class="cart">
                <?php foreach ($model->reviews as $review): ?>
                    <div class="cart-body">
                        <div class="row">
                            <div class="col-auto">
                                <img class="img img-circle" width="60" src="<?= $review->offer->roundLogo ?>">
                            </div><!-- .col -->
                            <div class="col-12 col-md">
                                <h3 class="mb-1"><?= $review->offer->finmarketName ?></h3>
                                <p>
                                    <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                                    <?= $review->name ?>
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p><?= $review->created ?></p>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <p><?= $review->text ?></p>
                    </div><!-- .cart-body -->

                    <div class="divider mb-1 last-child-none"></div>
                <?php endforeach; ?>
            </div><!-- .cart -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?php if ($model->isPosts): ?>
    <section class="section bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 mb-4">
                    <div class="cart">
                        <div class="cart-body center lg-left">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-auto">
                                    <img class="img-center" width="70" src="/img/ava-man.svg">
                                </div><!-- .col -->
                                <div class="col-12 col-lg">
                                    <h3 class="mb-1">Денис Беневольский</h3>
                                    <p>04 дек. 2020</p>
                                </div><!-- .col-12 -->
                            </div><!-- .row -->
                            <h3 class="yellow">Как зарабатывать на дебетовой карте?</h3>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
                <div class="col-12 col-sm-6 mb-4">
                    <div class="cart">
                        <div class="cart-body center lg-left">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-auto">
                                    <img class="img-center" width="70" src="/img/ava-man.svg">
                                </div><!-- .col -->
                                <div class="col-12 col-lg">
                                    <h3 class="mb-1">Денис Беневольский</h3>
                                    <p>01 дек. 2020</p>
                                </div><!-- .col-12 -->
                            </div><!-- .row -->
                            <h3 class="yellow">Как выбрать дебетовую карту?</h3>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?php if ($model->isIssue): ?>
    <section class="section bg">
        <div class="container">
            <h2 class="h1"><?= $model->page->issueType ?></h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-body center">
                            <div class="circle-i em-30 mx-auto">
                                <i class="i-pie"></i>
                            </div>
                            <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-body center">
                            <div class="circle-i em-30 mx-auto">
                                <i class="i-contract"></i>
                            </div>
                            <p>Перед оформлением карты ознакомьтесь с условиями на странице предложения</p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-body center">
                            <div class="circle-i em-30 mx-auto">
                                <i class="i-edit"></i>
                            </div>
                            <p>Нажмите на кнопку “Оформить” и заполните анкету на сайте банка</p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?php if ($model->page->content): ?>
    <section class="section bg">
        <div class="container">
            <div class="cart mb-4 p-lg-3">
                <div class="cart-body">
                    <div class="editor">
                        <?= $model->page->content ?>
                    </div>
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>

<?php if (is_array($popTags) && count($popTags)): ?>
    <section class="section bg">
        <div class="container">
            <div class="cart mb-4 p-lg-3">
                <div class="cart-body">
                    <h2 class="h1">Популярные предложения</h2>
                    <?php foreach ($popTags as $popTag): ?>
                        <h3><?= $popTag->title ?></h3>
                        <div class="row">
                            <?php foreach ($popTag->anchors as $anchor): ?>
                                <div class="col-auto mb-3">
                                    <a href="javascript:;"><?= $anchor->name ?></a>
                                </div><!-- .col -->
                            <?php endforeach; ?>
                        </div><!-- .row -->
                    <?php endforeach; ?>
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>