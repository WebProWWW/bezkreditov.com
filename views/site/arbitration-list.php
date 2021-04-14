<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

use app\models\Material;
use app\widgets\LinkPager;
use app\models\Arbitration;
use app\widgets\FormAjax;
use app\models\Region;
use app\models\ArbitrationCpo;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['description'] = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['breadcrumbs'] = [
    'Рейтинг арбитражных управляющих г.&nbsp;' . $city->name,
];

$arbitrations = $dataProvider->models;

?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Рейтинг арбитражных управляющих по банкротству физических лиц г.&nbsp;<?= $city->name ?></h1>
        <div class="mb-3">
            <div class="cart">
                <div class="cart-body">
                    <p>На портале «Без кредитов» составлен независимый рейтинг арбитражных управляющих. Ваш незаменимый помошник в поиске и проверке специалистов по банкротству физического лица. Для Вашего удобства мы собрали, систематизировали и оперативно обновляем данные обо всех управляющих в России.</p>
                    <p>Наш рейтинг учитывает опыт работы управляющих исключительно в банкротстве физических лиц.</p>
                </div>
            </div><!-- .cart -->
        </div>

        <div class="row">
            <div class="col-12 col-xl order-2 order-xl-1">
                <h2>Фильтр управляющих</h2>
                <!-- TODO Фильтр управляющих -->
                <div class="mb-4">
                    <div class="cart">
                        <form action="" id="arbitration-filter-form">

                            <div class="cart-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <label class="label" for="">Регион</label>
                                        <select name="regionCode" id="" class="input js-arbitration-filter-select" data-form="#arbitration-filter-form">
                                            <option value="">Все</option>
                                            <?php $regions = Region::findAllRegions(); ?>
                                            <?php $currentRegionCode = (int) Yii::$app->request->get('regionCode', $city->region_code) ?>
                                            <?php foreach ($regions as $region): ?>
                                                <option
                                                    <?= ($region->code === $currentRegionCode) ? 'selected' : '' ?>
                                                    value="<?= $region->code ?>"
                                                >
                                                    <?= $region->region_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div><!-- .col -->
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <label class="label" for="">Выбор СРО</label>
                                        <select name="spoId" id="" class="input js-arbitration-filter-select" data-form="#arbitration-filter-form">
                                            <option selected value="">Все</option>
                                            <?php $cpo = ArbitrationCpo::findAllCpo(); ?>
                                            <?php $currentCpoId = (int) Yii::$app->request->get('spoId', '') ?>
                                            <?php foreach ($cpo as $cpoOption): ?>
                                                <option value="<?= $cpoOption->cpo_id ?>" <?= $currentCpoId === $cpoOption->cpo_id ? 'selected' : '' ?>>
                                                    <?= $cpoOption->cpo_name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <?php $currentNameVal = Yii::$app->request->get('fullName', '') ?>
                                        <label class="label" for="">Поиск по фамилии</label>
                                        <input class="input" type="text" name="fullName" value="<?= $currentNameVal ?>" placeholder="Поиск по фамилии">
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .cart-body -->
                            <div class="cart-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <p>Упорядочить по:</p>
                                    </div><!-- .col-12 -->
                                    <div class="col-12 d-md-none d-xl-block"></div>
                                    <?php $currentOrderVal = Yii::$app->request->get('orderBy', 'people') ?>
                                    <input type="hidden" id="arbitration-filter-order" name="orderBy" value="<?= $currentOrderVal ?>">
                                    <div class="col-auto">
                                        <a
                                            class="tab-ln js-arbitration-filter-tab <?= ($currentOrderVal === 'people') ? 'active' : '' ?>"
                                            data-form="#arbitration-filter-form"
                                            data-input="#arbitration-filter-order"
                                            data-val="people"
                                        >
                                            Народный рейтинг
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-12 d-md-none d-xl-block"></div>
                                    <div class="col-auto">
                                        <a
                                            class="tab-ln js-arbitration-filter-tab <?= ($currentOrderVal === 'prof') ? 'active' : '' ?>"
                                            data-form="#arbitration-filter-form"
                                            data-input="#arbitration-filter-order"
                                            data-val="prof"
                                        >
                                            Профессиональный рейтинг
                                        </a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .cart-body -->
                            <div class="cart-body">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <button type="submit" class="btn-default">Найти</button>
                                    </div><!-- .col -->
                                    <div class="col-12 col-md-6 col-xl-12">
                                        <p class="center">
                                            <a class="ln-black-primary" href="<?= Url::to(['site/arbitration-list', 'page' => 1]) ?>">Сбросить фильтры</a>
                                        </p>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .cart-body -->

                        </form>
                    </div><!-- .cart -->
                </div>
                <h2>Полезные статьи</h2>
                <div class="row">
                    <?php foreach (Material::lastMaterials(6) as $material): ?>
                        <div class="col-12 col-lg-6 col-xl-12">
                            <div class="mb-4">
                                <div class="cart">
                                    <div class="cart-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img class="img" width="100" src="<?= $material->cropImg(300, 320) ?>">
                                            </div>
                                            <div class="col">
                                                <h4 class="em-9 mb-2"><?= StringHelper::truncate($material->title, 60) ?></h4>
                                                <div class="wall-divider mb-2"></div>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <p class="mutted em-9"><?= date('d.m.Y', $material->created_at) ?></p>
                                                    </div>
                                                    <div class="col-auto ml-auto">
                                                        <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .cart-body -->
                                </div><!-- .cart -->
                            </div><!-- cart wrapper -->
                        </div><!-- .col -->
                    <?php endforeach; ?>
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-xl-8 order-1 order-xl-2">
                <div class="row align-items-end">
                    <div class="col-12 col-md">
                        <h2>Рейтинг арбитражных управляющих</h2>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p class="row justify-content-end align-items-center no-gutters em-9">
                            <span class="col-auto mr-1">подобрано:</span>
                            <span class="col-auto mr-2"><span class="date-bg em-11"><?= $dataProvider->totalCount ?></span></span>
                            <span class="col-auto mr-1">всего:</span>
                            <span class="col-auto"><span class="date-bg em-11"><?= $dataProvider->totalCount ?></span></span>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->

                <div class="mb-3">
                    <div class="cart">
                        <?php foreach ($arbitrations as $key => $arbitration): ?>
                            <div class="cart-body <?= ($key%2 != 0) ? 'bg' : '' ?>">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-5 col-md-3">
                                        <img class="img-b" width="200" height="200" src="/img/arbitration_managers_photo/<?= $arbitration->image ?>">
                                    </div><!-- .col -->
                                    <div class="col-12 col-sm">
                                        <div class="row align-items-end">
                                            <div class="col-12 col-md">
                                                <p class="fw-600 em-11 mb-2"><?= $arbitration->fullname ?></p>
                                                <p class="em-11 mb-2">
                                                    <?php $stars = (float) $arbitration->people_rate ?>
                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                        <i class="i-star <?= ($stars >= $i) ? 'yellow' : 'mutted' ?>"></i>
                                                    <?php endfor; ?>
                                                </p>
                                                <p>ПРОФ рейтинг: <span class="fw-600 em-13"><?= $arbitration->professional_rate ?></span></p>
                                            </div><!-- .col -->
                                            <div class="col-12 col-md-5">
                                                <p class="md-right">
                                                    <span class="d-block fw-600">
                                                        <i class="i-map em-11 yellow"></i> Регион:
                                                    </span>
                                                    <?= $arbitration->region_name ?>
                                                </p>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                        <div class="row">
                                            <div class="col-auto mx-auto mx-sm-0">
                                                <a class="btn-default" href="<?= Url::to(['site/arbitration', 'id' => $arbitration->manager_id, 'page' => $dataProvider->pagination->page + 1]) ?>">Смотреть профиль</a>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .cart-body -->
                        <?php endforeach; ?>
                    </div><!-- .cart -->

                    <div class="row justify-content-center my-3">
                        <div class="col-auto">
                            <?= LinkPager::widget([
                                'pagination' => $dataProvider->pagination,
                            ]) ?>
                        </div>
                    </div><!-- .row -->

                </div><!-- .mb -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->