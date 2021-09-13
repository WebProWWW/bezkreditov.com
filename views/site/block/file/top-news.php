<?php

/* @var $this yii\web\View */
/* @var $city app\models\City */

use yii\helpers\ArrayHelper;
use app\helpers\StringHelper;
use app\helpers\Url;


$city = ArrayHelper::getValue($this->params, 'city');

$news = $city->region->lastNews

?>
<?php if ($news): ?>
    <section class="section bg">
        <div class="container">
            <h1 class="center mb-4">Актуальные новости по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h1>
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
            </div><!-- .row -->

            <div class="row justify-content-center">
                <div class="col-auto">
                    <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">Все новости</a>
                </div><!-- .col -->
            </div><!-- .row -->

        </div><!-- .container -->
    </section><!-- .section -->
<?php endif; ?>