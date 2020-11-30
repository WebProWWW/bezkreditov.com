<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $materials app\models\Material[] */

?>
<div class="row">
    <?php foreach ($materials as $material): ?>
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
                    <div class="d-flex no-gutters align-items-center em-9 mutted">
                        <div class="col-auto mr-3">
                            <p class="mutted"><?= date('d.m.Y', $material->created_at) ?></p>
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
                    </div>
                    <div class="row">
                        <div class="col-auto ml-auto">
                            <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
                        </div>
                    </div>
                </div><!-- .cart-footer -->
            </div><!-- .cart -->
        </div><!-- .col -->
    <?php endforeach; ?>
</div><!-- .row -->