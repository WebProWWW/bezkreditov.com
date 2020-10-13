<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\data\Pagination;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Новости по банкротству физических лиц г. '.$city->name;
$this->params['description'] = $this->title;
$this->params['breadcrumbs'] = [ 'Новости по банкротству физических лиц г.&nbsp;'.$city->name ];

?>
<section class="section bg">
    <div class="container">
        <?php if ($news = $city->news): ?>
            <h1 class="center">Новости по банкротству физических лиц г.&nbsp;<?= $city->name ?></h1>
            <div class="row">
            <?php foreach ($news as $newsItem): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-img-header">
                            <img class="cart-img" src="<?= $newsItem->image ?>">
                        </div>
                        <div class="cart-body">
                            <h4><?= StringHelper::truncate($newsItem->title, 100) ?></h4>
                            <p><?= StringHelper::truncate($newsItem->description, 160) ?></p>
                        </div><!-- .cart-body -->
                        <div class="cart-footer">
                            <div class="d-flex no-gutters align-items-center">
                                <div class="col">
                                    <p class="mutted em-9"><?= $newsItem->date ?></p>
                                </div>
                                <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to([
                                        'site/news-item',
                                        'alias' => $newsItem->alias
                                    ]) ?>">Читать</a>
                                </div>
                            </div>
                        </div><!-- .cart-footer -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            <?php endforeach; ?>
            </div><!-- .row -->
        <?php else: ?>
            <p class="center em-16 my-5">
                Извините пока по городу <?= $city->name ?> отсутствуют новости.
                <br>
                В ближайшее время они обязательно появятся.
            </p>
        <?php endif; ?>
    </div><!-- .container -->
</section><!-- .section -->