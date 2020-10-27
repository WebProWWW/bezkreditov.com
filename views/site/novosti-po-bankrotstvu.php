<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Новости по банкротству физических лиц в г. '.$city->name;
$this->params['description'] = $this->title;
$this->params['breadcrumbs'] = [ 'Новости по банкротству физических лиц в&nbsp;г.&nbsp;'.$city->name ];

?>
<section class="section bg">
    <div class="container">
        <?php if ($newsDataProvider = $city->news): ?>
            <h1 class="center">Новости по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h1>
            <div class="row">
                <?php foreach ($newsDataProvider->models as $news): ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="cart">
                            <div class="cart-img-header">
                                <img class="cart-img" src="<?= $news->thumb ?>">
                            </div>
                            <div class="cart-body">
                                <h4><?= StringHelper::truncate($news->title, 100) ?></h4>
                                <p><?= StringHelper::truncate($news->description, 160) ?></p>
                            </div><!-- .cart-body -->
                            <div class="cart-footer">
                                <div class="d-flex no-gutters align-items-center">
                                    <div class="col">
                                        <p class="mutted em-9"><?= date('d.m.Y', $news->date) ?></p>
                                    </div>
                                    <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                        <a class="btn btn-sm btn-default" href="<?= Url::to([
                                            'site/news-item',
                                            'alias' => $news->alias
                                        ]) ?>">Читать</a>
                                    </div>
                                </div>
                            </div><!-- .cart-footer -->
                        </div><!-- .cart -->
                    </div><!-- .col -->
                <?php endforeach; ?>
            </div><!-- .row -->
            <div class="row justify-content-center my-3">
                <div class="col-auto">
                    <?= LinkPager::widget([
                        'pagination' => $newsDataProvider->pagination,
                    ]) ?>
                </div>
            </div>
        <?php else: ?>
            <p class="center em-16 my-5">
                Извините пока по городу <?= $city->name ?> отсутствуют новости.
                <br>
                В ближайшее время они обязательно появятся.
            </p>
        <?php endif; ?>
        <?= $this->render('-form-consult') ?>
    </div><!-- .container -->
</section><!-- .section -->