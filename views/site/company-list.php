<?php

use app\models\City;
use app\models\Company;
use app\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $city City */
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $companies Company[] */

$this->title = 'Рейтинг компаний по банкротству физических лиц в г. ' . $city->name;

$titleHtml = 'Рейтинг компаний по банкротству физических лиц в&nbsp;г.&nbsp;'.$city->name;

$this->params['breadcrumbs'] = [
    $titleHtml,
];

$this->params['description'] = $this->title;

$companies = $dataProvider->models;
$currentPage = $dataProvider->pagination->page + 1;

?>
<div class="container pb-1">
    <h1><?= $titleHtml ?></h1>
</div>

<section class="section bg">
    <div class="container">
        <?= Html::beginForm(Url::to(['site/company-list', 'page' => 1]), 'get') ?>
            <div class="row">
                <div class="col-12 col-lg">
                    <?php $search = Yii::$app->request->get('search', '') ?>
                    <input class="input" type="text" name="search" value="<?= $search ?>" placeholder="Название компании">
                </div><!-- .col -->
                <div class="col-12 col-lg-auto">
                    <button type="submit" class="btn btn-default">Подобрать компанию</button>
                </div><!-- .col -->
            </div><!-- .row -->
        <?= Html::endForm() ?>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">

        <div class="list">

            <div class="d-none d-xl-block">
                <div class="row bg-eo border-header-xl">
                    <div class="col-5">
                        <p class="fw-600 em-9">Название компании</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Успешных дел</p>
                    </div><!-- .col -->
                    <div class="col-3 center">
                        <p class="fw-600 em-9">Текущие дела</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Год основания</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Отзывов</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Рейтинг</p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>

            <?php foreach ($companies as $company): ?>
                <a class="list-item" href="<?= Url::to([
                    'site/company',
                    'cpage' => ($csVal) ? 1 : $currentPage,
                    'alias' => $company->alias,
                ]) ?>">
                    <div class="col-12 col-xl-5 mx-auto mx-sm-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto mr-3">
                                <img class="klogo" width="60" src="<?= $company->logoImg ?>">
                            </div>
                            <div class="col">
                                <p class="mb-1 fw-600"><?= $company->name ?></p>
                                <p class="em-8"><?= $company->address ?></p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-6 col-md-auto col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Успешных дел</p>
                        <div class="percent-circle">
                            <span data-circle-percent="<?= $company->percent ?>"></span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-6 col-md-4 col-xl-3 mx-auto">
                        <p class="fw-600 em-9 center d-xl-none">Текущие дела</p>
                        <p class="em-9">
                            <?= $company->cases ? $company->cases . ' - всего дел<br>' : '' ?>
                            <?= $company->written_off ? $company->written_off . ' - списание долгов<br>' : '' ?>
                            <?= $company->in_work ? $company->in_work . ' - в работе<br>' : '' ?>
                            <?= $company->in_work ? $company->refusals . ' - отказ в списании' : '' ?>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 d-md-none"><span class="divider-dark"></span></div>
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Год основания</p>
                        <p><?= $company->year_of_foundation ?> г.</p>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Отзывов</p>
                        <p><i class="i-mgs-a"></i> <?= $company->commentsCount ?></p>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Рейтинг</p>
                        <p class="em-16"><i class="i-star primary"></i> <?= $company->rate ?></p>
                    </div><!-- .col -->
                </a>
            <?php endforeach; ?>

        </div><!-- .list -->

        <div class="row justify-content-center my-3">
            <div class="col-auto">
                <?= LinkPager::widget([
                    'pagination' => $dataProvider->pagination,
                ]) ?>
            </div>
        </div><!-- .row -->



    </div><!-- .container -->
</section><!-- .section -->

<div class="section bg">
    <div class="container">
        <?= $this->render('-form-consult') ?>
    </div>
</div>