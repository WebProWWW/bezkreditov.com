<?php

use yii\helpers\StringHelper;
use app\models\Material;
use app\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model Material */

$this->title = $model->title;

$this->params['description'] = $model->description;

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => Material::ALIAS],
        'label' => Material::title($city),
    ],
];

$srcUrl = Yii::$app->urlManager->createAbsoluteUrl(['site/material', 'alias' => $material->alias]);

?>
<section class="section bg">
    <div class="container">
        <h1 class="center"><?= $model->title ?></h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 col-md-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-md-auto mr-3 right">Выход статьи:</span>
                            <span class="col col-md-auto"><span class="date-bg"><?= date('d.m.Y', $model->created_at) ?></span></span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-md-auto mr-3 right">Время чтения:</span>
                            <span class="col col-md-auto"><span class="date-bg"><?= $model->readTime ?></span></span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-md-auto mr-3 right">Просмотров:</span>
                            <span class="col col-md-auto">
                                <i class="i-eye-a"></i>
                                <?= $model->viewCount ?>
                            </span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-md-auto mr-3 right">Поделиться:</span>
                            <span class="col col-md-auto">
                                <a class="ln-black-primary mr-2" target="_blank" href="https://vk.com/share.php?url=<?= $srcUrl ?>">
                                    <i class="i-vk"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $srcUrl ?>">
                                    <i class="i-f"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://connect.ok.ru/offer?url=<?= $srcUrl ?>&title=<?= $page->title ?>">
                                    <i class="i-ok"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $page->title ?>&url=<?= $srcUrl ?>">
                                    <i class="i-tw"></i>
                                </a>
                                <a class="ln-black-primary" target="_blank" href="https://telegram.me/share/url?url=<?= $srcUrl ?>&text=<?= $page->title ?>">
                                    <i class="i-telegram"></i>
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
                <img class="img" style="width: 100%" src="<?= $model->img ?>" alt="<?= $model->title ?>">
                <p><?= $model->description ?></p>
                <div class="editor">
                    <div class="js-h-hash-nav"></div>
                    <?= $model->content ?>
                </div>
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <?= $this->render('-form-consult') ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="h1 center">Другие материалы по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>

        <div class="row">
            <?php foreach ($model->lastMaterials as $lastMaterial): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="cart">
                            <div class="cart-img-header">
                                <img class="cart-img" style="width: 100%" src="<?= $lastMaterial->thumb ?>">
                            </div>
                            <div class="cart-body">
                                <h4><?= $lastMaterial->title ?></h4>
                                <p><?= StringHelper::truncate($lastMaterial->description, 100) ?></p>
                            </div><!-- .cart-body -->
                            <div class="cart-footer">
                                <div class="d-flex no-gutters align-items-center">
                                    <div class="col">
                                        <p class="mutted"><?= date('d.m.Y', $lastMaterial->created_at) ?></p>
                                    </div>
                                    <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                        <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $lastMaterial->alias]) ?>">Читать</a>
                                    </div>
                                </div>
                            </div><!-- .cart-footer -->
                        </div><!-- .cart -->
                    </div><!-- .col -->
            <?php endforeach; ?>
        </div><!-- .row -->

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-5 col-lg-3">
                <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => Material::ALIAS]) ?>">Читать все материалы</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<div class="block-divider bg"></div>