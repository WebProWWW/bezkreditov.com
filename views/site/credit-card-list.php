<?php

use yii\helpers\ArrayHelper;
use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model app\models\Unicom */
/* @var $tags app\models\UnicomTag[] */
/* @var $tagTiles  app\models\UnicomTag */
/* @var $popTags  app\models\UnicomTag[] */

$this->title = str_replace('%offer_count%', $model->offersCount, $model->page->title);
$this->params['description'] = $model->page->description;

$this->params['breadcrumbs'] = ($model->page->url !== '/kreditnye-karty') ? [
    [
        'label' => 'Кредитные карты',
        'url' => ['site/credit-card-list', 'page' => 1]
    ],
    $model->page->breadcrumbTitle,
] : [
    $model->page->breadcrumbTitle
];

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

?>
<section class="section bg" style="position: relative; overflow: hidden; background: #DADAE6;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1><?= $model->page->h1 ?></h1>
                <div><?= str_replace('%offer_count%', $model->offersCount, $model->page->shortContent) ?></div>
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-center" width="430" src="/img/img-50.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <label class="label">Сумма кредита</label>
                <select class="input">
                    <option selected>от 50 000 ₽</option>
                    <option>от 100 000 ₽</option>
                    <option>от 150 000 ₽</option>
                    <option>от 200 000 ₽</option>
                    <option>от 300 000 ₽</option>
                    <option>от 500 000 ₽</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-md">
                <label class="label">Льготный период</label>
                <select class="input">
                    <option selected>Любой</option>
                    <option>30 дней</option>
                    <option>50 дней</option>
                    <option>90 дней</option>
                    <option>120 дней</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-md-auto">
                <label class="label d-none d-md-block">&nbsp;</label>
                <button class="btn-default">Показать</button>
            </div><!-- .col -->
        </div><!-- .row -->
        <?php if ($tagTiles): ?>
            <div class="row no-gutters" style="margin: 0 -3px">
                <?php foreach ($tagTiles->anchors as $anchor): ?>
                    <div class="col-auto" style="margin: 0 3px">
                        <a
                                class="btn-trsp btn-sm px-2 <?= ($anchor->path === $model->path) ? 'active' : '' ?>"
                                style="font-size: .75em"
                                href="<?= Url::to([
                                    'site/credit-card-list',
                                    'alias' => $anchor->alias,
                                    'page' => 1,
                                ]) ?>"
                        >
                            <?= $anchor->name ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div><!-- .row -->
        <?php endif; ?>
    </div><!-- .container -->
</section><!-- .section -->

<?= $this->render('credit-card-list-item', [
    'title' => 'Рекомендуем '.$model->page->recommendedKey,
    'offers' => $model->offersRecommend,
]) ?>

<?= $this->render('credit-card-list-item', [
    'title' => 'Подобрать '.$model->page->selectedKey,
    'pagination' => $model->pagination,
    'offers' => $model->offers,
]) ?>

<section class="section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-date"></i>
                        </div>
                        <h3>Льготный период до 240 дней</h3>
                        <p>Возвращайте деньги без переплат более полугода!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-card"></i>
                        </div>
                        <h3>Кредитный лимит до 3&nbsp;000&nbsp;000&nbsp;рублей</h3>
                        <p>Суммы, на которые можно позволить себе даже квартиру!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-undo"></i>
                        </div>
                        <h3>Кэшбэк до 30%</h3>
                        <p>Зарабатывайте на карте, не платя проценты!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $model->page->offerWallReviewsBlockHeader ?></h2>
        <div class="cart">
            <?php foreach ($model->reviews as $review): ?>
                <div class="cart-body">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img" width="80" src="<?= $review->offer->logo ?>">
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

<section class="section bg">
    <div class="container">
        <h2 class="h1"><?= $model->page->issueType ?></h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
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

<?php if (is_array($popTags)): ?>
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