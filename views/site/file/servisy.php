<?php

use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $page app\models\Page */

$this->title = $page->title;
$this->params['description'] = $page->description;
$this->params['breadcrumbs'] = [$page->label];

?>
<section class="section mt-auto">
    <div class="container">
        <div class="center">
            <h3>Сервисы</h3>
            <p>Нужен макет или корректировка</p>
        </div>
        <div class="row">
            <?php foreach ($page->childs as $item): ?>
                <div class="mb-4 col-12 col-md-6 col-lg-4">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row align-items-center my-auto">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <img class="img-center" width="180" height="180" src="/img/icon-svg/report_analysis__monochromatic.svg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <p class="center"><?= $item->label ?></p>
                                    <div class="row">
                                        <div class="col-auto mx-auto">
                                            <a class="btn-sm btn-default" href="<?= Url::to(['site/index', 'alias' => $page->alias, 'category' => $item->alias]) ?>">
                                                Перейти
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            <?php endforeach; ?>
        </div>
    </div><!-- .container -->
</section><!-- .section -->