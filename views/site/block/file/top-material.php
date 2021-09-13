<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use app\models\Material;

/* @var $this yii\web\View */
/* @var $materials app\models\Material[] */

$city = $this->params['city'];

?>
<section class="section">
    <div class="container">

        <h2 class="h1 center">Полезные материалы по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>

        <div class="row justify-content-center mb-3 js-tab-links">
            <div class="col-auto">
                <a class="tab-ln active" data-link="#block-material-slide-0" href="javascript:;">Лучшее за неделю</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#block-material-slide-1" href="javascript:;">Выбор редакции</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#block-material-slide-2" href="javascript:;">Самое популярное</a>
            </div><!-- .col -->
        </div><!-- .tab -->

        <div class="js-tab-contents">
            <?php $materials = Material::lastMaterials(); ?>
            <?php foreach ($materials as $key => $category): ?>
                <div class="tab-content<?= $key === 0 ? ' active' : '' ?>" id="block-material-slide-<?= $key ?>" style="opacity: <?= $key === 0 ? '1' : '0' ?>">
                    <div class="row">
                        <?php foreach ($category as $material): ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="cart">
                                    <div class="cart-img-header">
                                        <img class="cart-img" src="<?= $material->thumb ?>" alt="<?= $material->title ?>">
                                    </div>
                                    <div class="cart-body">
                                        <h4><?= $material->title ?></h4>
                                        <p><?= StringHelper::truncate($material->description, 100) ?></p>
                                    </div><!-- .cart-body -->
                                    <div class="cart-footer">
                                        <div class="row no-gutters align-items-center em-9 mutted">
                                            <div class="col-auto mr-3">
                                                <p class="mutted"><?= date('d.m', $material->created_at) ?></p>
                                            </div>
                                            <div class="col-auto ml-auto mr-3">
                                                <p class=""><i class="i-mark"></i> 1</p>
                                            </div>
                                            <div class="col-auto mr-3">
                                                <p class=""><i class="i-heart red"></i> 1</p>
                                            </div>
                                            <div class="col-auto mr-3">
                                                <p class=""><i class="i-comment"></i> 13</p>
                                            </div>
                                            <div class="col-auto mr-3">
                                                <p class="mutted">
                                                    <i class="i-eye-a"></i>
                                                    <?= $material->viewCount ?>
                                                </p>
                                            </div>
                                            <div class="col-12 col-sm-auto ml-auto">
                                                <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
                                            </div>
                                        </div>
                                    </div><!-- .cart-footer -->
                                </div><!-- .cart -->
                            </div><!-- .col -->
                        <?php endforeach; ?>
                    </div><!-- .row -->
                </div><!-- .tab-content -->
            <?php endforeach; ?>
        </div><!-- .js-tab-contents -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="<?= Url::to([
                    'site/index',
                    'alias' => Material::ALIAS
                ]) ?>">Читать все материалы</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->