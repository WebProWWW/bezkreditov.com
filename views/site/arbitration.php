<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

use app\models\Material;
use app\widgets\FormAjax;
use app\models\Region;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['description'] = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih'],
        'label' => 'Рейтинг арбитражных управляющих г.&nbsp;' . $city->name,
    ],
];

?>
<section class="section bg">
    <div class="container">

        <div class="row">
            <div class="col-12 col-xl order-2 order-xl-1">
                <a class="btn-default">Заказать банкротство</a>
                <a class="btn-trsp">Оставить отзыв</a>
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">К списку управляющих</a>
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

                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-1.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-md">
                                    <p class="fw-600">
                                        <span class="d-block em-13">Коптяева Дарья Павловна</span>
                                        <span class="d-block">Арбитражный управляющий</span>
                                    </p>
                                    <p class="row no-gutters align-items-end">
                                        <span class="col-12 col-md-6 fw-600">Народный рейтинг:</span>
                                        <span class="col-12 col-md-6 yellow em-15">
                                            <i class="i-star"></i>
                                            <i class="i-star"></i>
                                            <i class="i-star"></i>
                                            <i class="i-star"></i>
                                            <i class="i-star"></i>
                                        </span>
                                    </p>
                                    <p class="row no-gutters align-items-end">
                                        <span class="col-12 col-md-6 fw-600 mb-1">Профессиональный рейтинг:</span>
                                        <span class="col-12 col-md-6 fw-600">
                                            <span class="em-15">3433.5</span>
                                            <a class="col-auto ln-black-primary fw-400">Что&nbsp;это&nbsp;значит?</a>
                                        </span>
                                    </p>
                                    <p>Сведения о саморегулируемой организации арбитражных управляющих: СРО ААУ "Евросиб" - Ассоциация Евросибирская саморегулируемая организация арбитражных управляющих</p>
                                    <p class="fw-600">Сведения о арбитражном управляющем:</p>
                                    <p class="row no-gutters bg" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Регион:</span>
                                        <span class="col-12 col-sm-6">Белгородская область</span>
                                    </p>
                                    <p class="row no-gutters" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Регистрационный номер:</span>
                                        <span class="col-12 col-sm-6">16665</span>
                                    </p>
                                    <p class="row no-gutters bg" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Электронная почта:</span>
                                        <span class="col-12 col-sm-6"></span>
                                    </p>
                                    <p class="row no-gutters align-items-center" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Телефон:</span>
                                        <span class="col-12 col-sm-6"><a class="btn-sm btn-default m-0">Перезвонить</a></span>
                                    </p>
                                    <p class="row no-gutters bg" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Веб-сайт:</span>
                                        <span class="col-12 col-sm-6"></span>
                                    </p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Участие управляющего в делах по банкротству физических лиц</span></h3>
                            <p class="row no-gutters align-items-end">
                                <span class="col">Колличество дел по банкротству физических лиц с участием управляющего</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px">643</span>
                                </span>
                            </p>
                            <p class="row no-gutters align-items-end">
                                <span class="col">Количество дел по реструктуризации долгов с участием управляющего</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px">0</span>
                                </span>
                            </p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Дела по банкротству физических лиц, завершенные списанием долга</span></h3>
                            <p class="row">
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-7475/2015</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-7722/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-6057/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-8191/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-4501/2016</span>
                                <span class="col-12 d-none d-lg-block"></span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-8278/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-4501/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-8278/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-5423/2016</span>
                                <span class="col-6 col-sm-4 col-md-3 col-lg py-1">А08-8571/2016</span>
                            </p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Дела по банкротству физических лиц, из которых вышел этот управляющий:</span></h3>
                            <p class="row no-gutters align-items-center">
                                <span class="col">Отсутствуют</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px">0</span>
                                </span>
                            </p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Отзывы о Коптяева Дарья Павловна</span></h3>
                            <div class="bg-eo"></div>
                            <div class="row align-items-center bg-eo pt-3">
                                <div class="col-12 col-lg-auto">
                                    <div class="ava">
                                        <img class="ava-img" width="90" height="90" src="/img/ava.svg">
                                    </div>
                                </div><!-- .col -->
                                <div class="col-12 col-lg">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md right md-left">
                                            <p><strong>Тараканова Наталья Юрьевна</strong>, Москва</p>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <p class="d-flex align-items-center">
                                                <span class="d-block mr-3 mb-1 yellow">
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                </span>
                                                <span class="d-block">
                                                    <i class="i-date mr-2"></i> 30 марта 2020
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p>Благодарна Коптяевой Дарье Павловне безмерно! Очень внимательный, добрый человек! Профессионал своего дела, который очень любит свою работу! Это сразу видно и чувствуется! Я много начиталась о том как плохо работают финансовые управляющие, но Дарья Павловна перевернула мое представление! Закончила процедуру в срок, не затягивала процесс! Все очень четко и быстро! Спасибо огромное!</p>
                                </div>
                            </div><!-- .row -->
                            <div class="row align-items-center bg-eo pt-3">
                                <div class="col-12 col-lg-auto">
                                    <div class="ava">
                                        <img class="ava-img" width="90" height="90" src="/img/ava.svg">
                                    </div>
                                </div><!-- .col -->
                                <div class="col-12 col-lg">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md right md-left">
                                            <p><strong>Тараканова Наталья Юрьевна</strong>, Москва</p>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <p class="d-flex align-items-center">
                                                <span class="d-block mr-3 mb-1 yellow">
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                </span>
                                                <span class="d-block">
                                                    <i class="i-date mr-2"></i> 30 марта 2020
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p>Благодарна Коптяевой Дарье Павловне безмерно! Очень внимательный, добрый человек! Профессионал своего дела, который очень любит свою работу! Это сразу видно и чувствуется! Я много начиталась о том как плохо работают финансовые управляющие, но Дарья Павловна перевернула мое представление! Закончила процедуру в срок, не затягивала процесс! Все очень четко и быстро! Спасибо огромное!</p>
                                </div>
                            </div><!-- .row -->
                            <div class="row align-items-center bg-eo pt-3">
                                <div class="col-12 col-lg-auto">
                                    <div class="ava">
                                        <img class="ava-img" width="90" height="90" src="/img/ava.svg">
                                    </div>
                                </div><!-- .col -->
                                <div class="col-12 col-lg">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md right md-left">
                                            <p><strong>Тараканова Наталья Юрьевна</strong>, Москва</p>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <p class="d-flex align-items-center">
                                                <span class="d-block mr-3 mb-1 yellow">
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                    <i class="i-star"></i>
                                                </span>
                                                <span class="d-block">
                                                    <i class="i-date mr-2"></i> 30 марта 2020
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <p>Благодарна Коптяевой Дарье Павловне безмерно! Очень внимательный, добрый человек! Профессионал своего дела, который очень любит свою работу! Это сразу видно и чувствуется! Я много начиталась о том как плохо работают финансовые управляющие, но Дарья Павловна перевернула мое представление! Закончила процедуру в срок, не затягивала процесс! Все очень четко и быстро! Спасибо огромное!</p>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="mb-4">
            <div class="cart">
                <div class="cart-body">
                    <h2 class="center">Лидеры рейтинга арбитражных управляющих. Белгородская область</h2>
                    <div class="list list-md-border">

                        <div class="d-none d-lg-block">
                            <div class="row bg-eo border-header">
                                <div class="col">
                                    <p class="fw-600 em-9">Арбитражный управляющий</p>
                                </div><!-- .col -->
                                <div class="col-3 center">
                                    <p class="fw-600 em-9">Регион</p>
                                </div><!-- .col -->
                                <div class="col-2 center">
                                    <p class="fw-600 em-9">Рейтинг ПРОФ</p>
                                </div><!-- .col -->
                                <div class="col-3 center">
                                    <p class="fw-600 em-9">Народный рейтинг</p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>

                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>
                        <a class="list-item" href="">
                            <div class="col-12 col-lg">
                                <p class="fw-600">Коптяева Дарья Павловна</p>
                            </div><!-- .col -->
                            <div class="col-12 col-lg-3">
                                <p>
                                    <span class="fw-600 d-md-none">Регион<br></span>
                                    Белгородская область
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Рейтинг ПРОФ<br></span>
                                    3433.5
                                </p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <p class="md-center">
                                    <span class="fw-600 d-md-none">Народный рейтинг<br></span>
                                    <span class="yellow">
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                        <i class="i-star"></i>
                                    </span>
                                </p>
                            </div><!-- .col -->
                        </a>

                    </div><!-- .list -->

                    <div class="row">
                        <div class="col-auto mx-auto">
                            <a class="btn-default" href="<?= Url::to(['site/index', 'view' => 'rejting-arbitrazhnyh-upravlyayushih']) ?>">Показать весь рейтинг управляющих</a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div>
    </div><!-- .container -->
</section><!-- .section -->