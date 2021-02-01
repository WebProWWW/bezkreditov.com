<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

use app\models\Material;
use app\widgets\FormAjax;
use app\models\Region;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Рейтинг частных юристов по банкротству физических лиц г. '.$city->name;

$this->params['description'] = 'На портале «Без кредитов» составлен независимый рейтинг юристов по банкротству. Ваш незаменимый помошник в поиске и проверке специалистов по банкротству физического лица. Для Вашего удобства мы собрали, систематизировали и оперативно обновляем данные обо всех управляющих в России.';

$this->params['breadcrumbs'] = [
    'Рейтинг частных юристов по банкротству физических лиц г.&nbsp;' . $city->name,
];

?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Рейтинг частных юристов по банкротству физических лиц г.&nbsp;<?= $city->name ?></h1>
        <div class="mb-3">
            <div class="cart">
                <div class="cart-body">
                    <p>На портале «Без кредитов» составлен независимый рейтинг юристов по банкротству. Ваш незаменимый помошник в поиске и проверке специалистов по банкротству физического лица. Для Вашего удобства мы собрали, систематизировали и оперативно обновляем данные обо всех управляющих в России.</p>
                    <p>Наш рейтинг учитывает опыт работы юристов в банкротстве физических лиц.</p>
                </div>
            </div><!-- .cart -->
        </div>

        <div class="row">
            <div class="col-12 col-xl order-2 order-xl-1">
                <h2>Фильтр юристов</h2>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <label class="label" for="">Регион</label>
                                    <select name="" id="" class="input">
                                        <option selected>Все</option>
                                        <option></option>
                                    </select>
                                </div><!-- .col -->
                                <div class="col-12 col-md-6 col-xl-12">
                                    <label class="label" for="">Выбор СРО</label>
                                    <select name="" id="" class="input">
                                        <option selected>Все</option>
                                        <option></option>
                                    </select>
                                </div><!-- .col -->
                                <div class="col-12">
                                    <label class="label" for="">Поиск по фамилии</label>
                                    <input class="input" type="text" name="" placeholder="Поиск по фамилии">
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row">
                                <div class="col-auto">
                                    <p>Упорядочить по:</p>
                                </div><!-- .col-12 -->
                                <div class="col-12 d-md-none d-xl-block"></div>
                                <div class="col-auto">
                                    <a class="tab-ln active">Народный рейтинг</a>
                                </div><!-- .col -->
                                <div class="col-12 d-md-none d-xl-block"></div>
                                <div class="col-auto">
                                    <a class="tab-ln">Профессиональный рейтинг</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <a class="btn-default">Найти</a>
                                </div><!-- .col -->
                                <div class="col-12 col-md-6 col-xl-12">
                                    <p class="center">
                                        <a class="ln-black-primary">Сбросить фильтры</a>
                                    </p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
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
                        <h2>Рейтинг юристов по банкротству</h2>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p class="row justify-content-end align-items-center no-gutters em-9">
                            <span class="col-auto mr-1">подобрано:</span>
                            <span class="col-auto mr-2"><span class="date-bg em-11">11&nbsp;725</span></span>
                            <span class="col-auto mr-1">всего:</span>
                            <span class="col-auto"><span class="date-bg em-11">12&nbsp;294</span></span>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->

                <div class="mb-3">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-1.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Коптяева Дарья Павловна</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-2.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Усков Антон Сергеевич</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-3.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Кочкалов Сергей Александрович</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-4.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Кавокин Виталий Евгеньевич</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-5.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Холостова Маргарита Владимировна</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-6.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Артеменко Юрий Валерьевич</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-7.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Изосимов Григорий Олегович</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-8.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Меженок Анна Евгеньевна</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-9.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Серкина Юлия Сергеевна </p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-5 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/rate-10.jpg">
                                </div><!-- .col -->
                                <div class="col-12 col-sm">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md">
                                            <p class="fw-600 em-11 mb-2">Вальбом Олег Николаевич</p>
                                            <p class="yellow em-11 mb-2">
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                                <i class="i-star"></i>
                                            </p>
                                            <p>ПРОФ рейтинг: <span class="fw-600 em-13">3433.5</span></p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-md-5">
                                            <p class="md-right">
                                                <span class="d-block fw-600">
                                                    <i class="i-map em-11 yellow"></i> Регион:
                                                </span>
                                                Московская область
                                            </p>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration']) ?>">Смотреть профиль</a>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->