<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use app\widgets\LinkPager;
use app\models\Material;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = Material::title($city);
$titleHtml = Material::titleHtml($city);
$this->params['description'] = $this->title;
$this->params['breadcrumbs'] = [ $titleHtml ];
$dataProvider = Material::dataProvider();

?>
<section class="section bg">
    <div class="container">
        <h1 class="center"><?= $titleHtml ?></h1>

        <div class="row">
            <?php foreach ($dataProvider->models as $material): ?>
                <?php /* @var $material Material */ ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-img-header">
                            <img class="cart-img" src="<?= $material->thumb ?>">
                        </div>
                        <div class="cart-body">
                            <h4><?= $material->title ?></h4>
                            <p><?= StringHelper::truncate($material->description, 100) ?></p>
                        </div><!-- .cart-body -->
                        <div class="cart-footer">
                            <div class="d-flex no-gutters align-items-center">
                                <div class="col-auto">
                                    <p class="mutted"><?= date('d.m.Y', $material->created_at) ?></p>
                                </div>
                                <div class="col-auto mx-auto">
                                    <p class="mutted">
                                        <i class="i-eye-a"></i>
                                        <?= $material->viewCount ?>
                                    </p>
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
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
                    'pagination' => $dataProvider->pagination,
                ]) ?>
            </div>
        </div>

        <?= $this->render('-form-consult') ?>

    </div><!-- .container -->
</section><!-- .section -->