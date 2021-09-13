<?php

use yii\helpers\ArrayHelper;
use app\helpers\Url;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model app\models\Unicom */
/* @var $tags app\models\UnicomTag[] */
/* @var $tagTiles app\models\UnicomTag */
/* @var $popTags app\models\UnicomTag[] */

$this->title = str_replace('%offer_count%', $model->offersCount, $model->page->title);
$this->params['description'] = $model->page->description;

$this->params['breadcrumbs'] = ($model->page->url !== '/mikrozajmy') ? [
    [
        'label' => 'Микрозаймы',
        'url' => ['site/micro-loan-list', 'page' => 1]
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

<section class="section" style="position: relative; overflow: hidden; background: #F0F4F7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1><?= $model->page->h1 ?></h1>
                <div><?= str_replace('%offer_count%', $model->offersCount, $model->page->shortContent) ?></div>
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-center" width="490" src="/img/img-37.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section">
    <div class="container">
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
        <?php if ($tagTiles): ?>
            <div class="row no-gutters justify-content-lg-between" style="margin: 0 -3px">
                <?php foreach ($tagTiles->anchors as $anchor): ?>
                    <div class="col-auto" style="margin: 0 3px">
                        <a
                            class="btn-trsp btn-sm px-2 <?= ($anchor->path === $model->path) ? 'active' : '' ?>"
                            style="font-size: .75em"
                            href="<?= Url::to([
                                'site/micro-loan-list',
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

<?= $this->render('micro-loan-list-item', [
    'title' => 'Рекомендуем '.$model->page->recommendedKey,
    'offers' => $model->offersRecommend,
]) ?>

<?= $this->render('micro-loan-list-item', [
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
                            <i class="i-rub"></i>
                        </div>
                        <h3>Суммы до 500 000 рублей на карту</h3>
                        <p class="my-auto pb-3">Сотни тысяч рублей, не выходя из дома!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stat"></i>
                        </div>
                        <h3>Более 20 предложений под 0%</h3>
                        <p class="my-auto pb-3">Берите деньги и не переплачивайте МФО ни рубля!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-checked"></i>
                        </div>
                        <h3>До 100% одобрения</h3>
                        <p class="my-auto pb-3">Деньги может получить каждый - от студента до пенсионера!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

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