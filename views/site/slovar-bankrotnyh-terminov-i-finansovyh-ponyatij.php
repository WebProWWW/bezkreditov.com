<?php

use yii\helpers\Url;
use app\models\Material;
use app\widgets\LinkPager;
use app\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Словарь банкротных терминов и финансовых понятий';

$this->params['description'] = 'Что такое ФССП? Что такое реструктуризация долга? Кто такой финансовый управляющий? Кто такой судебный пристав? …вопросов больше чем ответов, наш банкротный словарь поможет ва разобраться в самых сложных определениях и понятиях';

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => 'slovar-bankrotnyh-terminov-i-finansovyh-ponyatij'],
        'label' => 'Словарь терминов и понятий',
    ],
];

$dataProvider = Material::dataProvider();

?>
<section class="section relative" style="background: #E2E6E9; overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 mx-auto">
                <h1 class="h2 mb-4">
                    <span class="dialog">Что такое ФССП?</span>
                    <span class="dialog">Что такое реструктуризация долга?</span>
                    <span class="dialog">Кто такой финансовый управляющий?</span>
                    <span class="dialog">Кто такой судебный пристав?</span>
                </h1>
                <p class="center em-11">…вопросов больше чем ответов, наш банкротный словарь поможет ва разобраться в самых сложных определениях&nbsp;и&nbsp;понятиях</p>
            </div><!-- .col -->
            <div class="col-8 col-md-5 col-lg-3 mx-auto align-self-end">
                <img class="img-center" src="/img/img-7.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h1>Словарь банкротных  терминов и финансовых понятий</h1>
        <p class="d-flex">
            <span>Поиск по словарю</span>
            <span class="ml-auto">Терминов:</span>
            <a class="ml-2" href>1780</a>
        </p>
        <div class="row">
            <div class="col-12 col-sm">
                <input id="search-input" class="input" type="text">
            </div>
            <div class="col-12 col-sm-auto">
                <a class="btn-default">Найти</a>
            </div>
        </div>
        <div class="mb-2">
            <a href>А</a>&nbsp;
            <a href>Б</a>&nbsp;
            <a href>В</a>&nbsp;
            <a href>Г</a>&nbsp;
            <a href>Д</a>&nbsp;
            <a href>Е</a>&nbsp;
            <a href>Ж</a>&nbsp;
            <a href>З</a>&nbsp;
            <a href>И</a>&nbsp;
            <a href>Й</a>&nbsp;
            <a href>К</a>&nbsp;
            <a href>Л</a>&nbsp;
            <a href>М</a>&nbsp;
            <a href>Н</a>&nbsp;
            <a href>О</a>&nbsp;
            <a href>П</a>&nbsp;
            <a href>Р</a>&nbsp;
            <a href>С</a>&nbsp;
            <a href>Т</a>&nbsp;
            <a href>У</a>&nbsp;
            <a href>Ф</a>&nbsp;
            <a href>Х</a>&nbsp;
            <a href>Ц</a>&nbsp;
            <a href>Ч</a>&nbsp;
            <a href>Ш</a>&nbsp;
            <a href>Щ</a>&nbsp;
            <a href>Ъ</a>&nbsp;
            <a href>Ы</a>&nbsp;
            <a href>Ь</a>&nbsp;
            <a href>Э</a>&nbsp;
            <a href>Ю</a>&nbsp;
            <a href>Я</a>&nbsp;
        </div>
        <div class="mb-3">
            <a href>0-9</a>&nbsp;
            <a href>A</a>&nbsp;
            <a href>B</a>&nbsp;
            <a href>C</a>&nbsp;
            <a href>D</a>&nbsp;
            <a href>E</a>&nbsp;
            <a href>F</a>&nbsp;
            <a href>G</a>&nbsp;
            <a href>H</a>&nbsp;
            <a href>I</a>&nbsp;
            <a href>J</a>&nbsp;
            <a href>K</a>&nbsp;
            <a href>L</a>&nbsp;
            <a href>M</a>&nbsp;
            <a href>N</a>&nbsp;
            <a href>O</a>&nbsp;
            <a href>P</a>&nbsp;
            <a href>Q</a>&nbsp;
            <a href>R</a>&nbsp;
            <a href>S</a>&nbsp;
            <a href>T</a>&nbsp;
            <a href>U</a>&nbsp;
            <a href>V</a>&nbsp;
            <a href>W</a>&nbsp;
            <a href>X</a>&nbsp;
            <a href>Y</a>&nbsp;
            <a href>Z</a>&nbsp;
        </div>
        <div class="row no-gutters">
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Факторинг</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Кредитная карта</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Интернет-банк</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Кредит</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Рефинансирование</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Овердрафт</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Ипотечные кредиты</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Вклады</a>
            </div>
            <div class="col-auto mr-3">
                <a class="btn-trsp btn-sm" href>Рассрочка</a>
            </div>
        </div>

        <div class="row">
            <?php $materials = $dataProvider->models ?>
            <?php foreach ($materials as $material): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
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

        <div class="row justify-content-center my-3">
            <div class="col-auto">
                <?= LinkPager::widget([
                    'pagination' => $dataProvider->pagination,
                ]) ?>
            </div>
        </div>

    </div><!-- .container -->
</section><!-- .section -->