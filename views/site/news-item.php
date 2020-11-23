<?php

use yii\helpers\StringHelper;
use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $city app\models\City */

$this->title = $model->title;

$this->params['description'] = $model->description;

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => 'novosti-po-bankrotstvu'],
        'label' => 'Новости по банкротству физических лиц в&nbsp;г.&nbsp;' . $city->name,
    ],
];

?>
<section class="section">
    <div class="container">
        <h1 class=""><?= $model->title ?></h1>
        <p><span class="date-bg"><?= date('d.m.Y', $model->date) ?></span></p>
        <img class="news-img" src="<?= $model->image ?>">
        <div class="editor">
            <?= $model->content ?>
        </div>
        <div style="clear: both"></div>
    </div><!-- .container -->
</section><!-- .section -->

<?php if ($news = $city->region->lastNews($model->id)): ?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Другие новости по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
        <?php foreach ($news as $newsItem): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="<?= $newsItem->thumb ?>">
                    </div>
                    <div class="cart-body">
                        <h4><?= StringHelper::truncate($newsItem->title, 100) ?></h4>
                        <p><?= StringHelper::truncate($newsItem->description, 160) ?></p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted em-9"><?= date('d.m.Y', $newsItem->date) ?></p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to([
                                    'site/news-item',
                                    'alias' => $newsItem->alias,
                                    'id' => $newsItem->id,
                                ]) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->
        <?php endforeach; ?>
        </div><!-- .container -->
</section><!-- .section -->
<?php endif; ?>