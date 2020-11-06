<?php

use yii\helpers\Url;
use app\models\City;
use app\models\Company;

/* @var $city City */
/* @var $this yii\web\View */
/* @var $company Company */

$this->title = 'Рейтинг компаний по банкротству физических лиц';

$this->params['breadcrumbs'] = [
    'Рейтинг компаний по банкротству физических лиц',
];

$this->params['description'] = $this->title;

$companyDataProvider = Company::dataProvider();

?>
<section class="section">
    <div class="container">
        <h1>Рейтинг компаний по банкротству физических лиц</h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">
            <?php /*
            <div class="col-12 col-lg">
                <select class="input js-select-search">
                    <?php if ($cities = City::allCities()): ?>
                        <?php $letter = '' ?>
                        <?php foreach ($cities as $optCity): ?>
                            <?php $cityLetter = mb_substr($optCity->name, 0, 1, 'utf-8') ?>
                            <?php if ($cityLetter !== $letter): ?>
                                <?php $letter = $cityLetter ?>
                                <option disabled><?= $letter ?></option>
                            <?php endif; ?>
                            <?php $selected = ($city->alias === $optCity->alias) ? 'selected' : '' ?>
                            <option value="<?= $optCity->alias ?>" <?= $selected ?>>
                                <?= $optCity->name ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div><!-- .col -->
            */ ?>
            <div class="col-12 col-lg">
                <input class="input" type="text" placeholder="Название компании">
            </div><!-- .col -->
            <div class="col-12 col-lg-auto">
                <button class="btn btn-default">Подобрать компанию</button>
            </div><!-- .col -->
        </div><!-- .row -->
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

            <?php foreach ($companyDataProvider->models as $company): ?>
                <a class="list-item" href="<?= Url::to(['site/company', 'alias' => $company->alias]) ?>">
                    <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
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
                    <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                        <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                        <div class="percent-circle">
                            <span data-circle-percent="<?= $company->percent ?>"></span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                        <p class="center sm-left">
                            <?= $company->cases ? $company->cases . ' - всего дел<br>' : '' ?>
                            <?= $company->written_off ? $company->written_off . ' - списание долгов<br>' : '' ?>
                            <?= $company->in_work ? $company->in_work . ' - в работе<br>' : '' ?>
                            <?= $company->in_work ? $company->refusals . ' - отказ в списании' : '' ?>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-md col-xl-1 center">
                        <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                        <p><?= $company->year_of_foundation ?> г.</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-md col-xl-1 center">
                        <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                        <p><i class="i-mgs-a"></i> <?= $company->getComments()->count() ?></p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-md col-xl-1 center">
                        <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                        <p class="em-16"><i class="i-star primary"></i> <?= $company->rate ?></p>
                    </div><!-- .col -->
                </a>
            <?php endforeach; ?>

        </div><!-- .list -->



    </div><!-- .container -->
</section><!-- .section -->

<div class="section bg">
    <div class="container">
        <?= $this->render('-form-consult') ?>
    </div>
</div>