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

$srcUrl = Yii::$app->urlManager->createAbsoluteUrl(['site/material', 'alias' => $model->alias]);

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
                <div class="row no-gutters align-items-center justify-content-md-between">
                    <div class="col-12 col-sm-auto mr-3">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-sm-auto mr-1 right">Выход статьи:</span>
                            <span class="col col-md-auto"><span class="date-bg"><?= date('d.m.Y', $model->created_at) ?></span></span>
                        </p>
                    </div>
                    <div class="col-12 col-sm-auto mr-3">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="col-5 col-sm-auto mr-1 right">Время чтения:</span>
                            <span class="col col-md-auto"><span class="date-bg"><?= $model->readTime ?></span></span>
                        </p>
                    </div>
                    <div class="col-12 d-md-none"></div>
                    <div class="col-auto ml-auto ml-md-0 mr-3">
                        <p class="em-9"><i class="i-mark"></i> 1</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-heart red"></i> 1</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-comment"></i> 13</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-eye-a"></i> <?= $model->viewCount ?></p>
                    </div>
                    <div class="col-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="d-none d-lg-block mr-2 right">Поделиться:</span>
                            <span class="col col-md-auto">
                                <a class="ln-black-primary mr-2" target="_blank" href="https://vk.com/share.php?url=<?= $srcUrl ?>">
                                    <i class="i-vk"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $srcUrl ?>">
                                    <i class="i-f"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://connect.ok.ru/offer?url=<?= $srcUrl ?>&title=<?= $model->title ?>">
                                    <i class="i-ok"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $model->title ?>&url=<?= $srcUrl ?>">
                                    <i class="i-tw"></i>
                                </a>
                                <a class="ln-black-primary" target="_blank" href="https://telegram.me/share/url?url=<?= $srcUrl ?>&text=<?= $model->title ?>">
                                    <i class="i-telegram"></i>
                                </a>
                            </span>
                        </p>
                    </div>
                </div><!-- .row -->
                <img class="img" style="width: 100%" src="<?= $model->img ?>" alt="<?= $model->title ?>">
                <p><?= $model->description ?></p>
                <div class="editor">
                    <div class="js-h-hash-nav"></div>
                    <?= $model->content ?>
                </div>
                <div class="row no-gutters align-items-center mt-5">
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-mark"></i> 1</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-heart red"></i> 1</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-comment"></i> 13</p>
                    </div>
                    <div class="col-auto mr-3">
                        <p class="em-9"><i class="i-eye-a"></i> <?= $model->viewCount ?></p>
                    </div>
                    <div class="col-auto">
                        <p class="row align-items-center no-gutters em-9">
                            <span class="d-none d-lg-block mr-2 right">Поделиться:</span>
                            <span class="col col-md-auto">
                                <a class="ln-black-primary mr-2" target="_blank" href="https://vk.com/share.php?url=<?= $srcUrl ?>">
                                    <i class="i-vk"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $srcUrl ?>">
                                    <i class="i-f"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://connect.ok.ru/offer?url=<?= $srcUrl ?>&title=<?= $model->title ?>">
                                    <i class="i-ok"></i>
                                </a>
                                <a class="ln-black-primary mr-2" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $model->title ?>&url=<?= $srcUrl ?>">
                                    <i class="i-tw"></i>
                                </a>
                                <a class="ln-black-primary" target="_blank" href="https://telegram.me/share/url?url=<?= $srcUrl ?>&text=<?= $model->title ?>">
                                    <i class="i-telegram"></i>
                                </a>
                            </span>
                        </p>
                    </div>
                </div><!-- .row -->
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
        <?= $this->render('-material-list', [ 'materials' => $model->lastMaterials ]) ?>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-5 col-lg-3">
                <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => Material::ALIAS]) ?>">Читать все материалы</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<div class="block-divider bg"></div>