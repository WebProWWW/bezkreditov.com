<?php

use app\helpers\Url;
use app\models\Company;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Список юристов по банкротству в г. Москва';

$this->params['description'] = 'Мы подобрали для вас список юристов по банкротству в вашем городе';

$this->params['breadcrumbs'] = [
    'Список юристов по банкротству в&nbsp;г.&nbsp;Москва',
];

$companyDataProvider = Company::dataProvider();

?>
<section class="section" style="background: #D9DEE1; overflow: hidden;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-4 col-lg-3 order-2 order-md-1 align-self-end mx-auto">
                <img class="img-center" src="/img/img-4.jpg" style="margin-bottom: -13px">
            </div><!-- .col -->
            <div class="col-12 col-sm-9 col-md-8 col-lg-7 col-xl-6 order-1 order-md-2 align-self-center">
                <div class="border-primary-8 pt-3 px-4 mb-3">
                    <h1>Мы подобрали для вас список юристов по&nbsp;банкротству в&nbsp;вашем&nbsp;городе</h1>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <h2 class="h1 center">Компании по банкротству в г. Москва</h2>

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
                        <p><i class="i-mgs-a"></i> <?= $company->getComments()->count() ?></p>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Рейтинг</p>
                        <p class="em-16"><i class="i-star primary"></i> <?= $company->rate ?></p>
                    </div><!-- .col -->
                </a>
            <?php endforeach; ?>
        </div><!-- .list -->
        <div class="row">
            <div class="col-auto mx-auto">
                <div class="btn-default">Посмотреть еще</div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->