<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->params['breadcrumbs'] = [
    'Компании по банкротству физических лиц г.&nbsp;Москва'
];

?>
<section class="section">
    <div class="container">
        <h1>Компании по банкротству физических лиц г.&nbsp;Москва</h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg">
                <select class="input">
                    <option>Все...</option>
                    <option>Банкрот Консалт</option>
                    <option>2Лекс</option>
                </select>
            </div><!-- .col -->
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
                <div class="row bg-eo botder-header-xl">
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

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-1.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 10</p>
                </div><!-- .col -->
            </a>

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-2.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 9.6</p>
                </div><!-- .col -->
            </a>

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-2.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 9.6</p>
                </div><!-- .col -->
            </a>

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-2.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 9.6</p>
                </div><!-- .col -->
            </a>

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-2.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 9.6</p>
                </div><!-- .col -->
            </a>

            <a class="list-item" href="<?= Url::to(['site/index', 'view' => 'kompaniya-bankrotkonsalt']) ?>">
                <div class="col-auto col-sm-12 col-xl-5 mx-auto mx-sm-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-3">
                            <img class="klogo" width="50" height="50" src="img/logo/bk-2.svg">
                        </div>
                        <div class="col">
                            <p class="mb-1 fw-600">Банкрот Консалт</p>
                            <p class="em-8">119021, РФ, г. Москва, Комсомольский проспект, д. 16/2, с. 3</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-auto col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Успешных дел:</p>
                    <img class="img mx-auto" width="70" src="img/rating-2.svg">
                </div><!-- .col -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <p class="fw-600 em-9 center d-xl-none">Текущие дела:</p>
                    <p class="center sm-left">
                        3455 - всего дел
                        <br>
                        3430 - списание долгов
                        <br>
                        43 - в работе
                        <br>
                        25 - отказ в списании
                    </p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Год основания:</p>
                    <p>2002 г.</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Отзывов:</p>
                    <p><i class="i-mgs-a"></i> 7</p>
                </div><!-- .col -->
                <div class="col-12 col-sm-4 col-md col-xl-1 center">
                    <p class="fw-600 em-9 d-xl-none">Рейтинг:</p>
                    <p class="em-16"><i class="i-star primary"></i> 9.6</p>
                </div><!-- .col -->
            </a>
        </div><!-- .list -->



    </div><!-- .container -->
</section><!-- .section -->