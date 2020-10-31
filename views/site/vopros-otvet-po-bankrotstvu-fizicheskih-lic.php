<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Вопрос - ответ';

$this->params['description'] = 'Вопрос-ответ по банкротству физических лиц в г. '.$city->name;

$this->params['breadcrumbs'] = [
    'Вопрос - ответ',
];

?>

<section class="section bg">
    <div class="container">
        <h1 class="center">Вопросы и ответы по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-auto">
                <img class="img-a" width="450" src="/img/man-d.png">
            </div><!-- .col -->
            <div class="col-12 col-lg offset-lg-1">
                <div class="wall arrow-lg">
                    <p>На этой странице вы можете получить консультацию по банкротству физических лиц от юриста, специализирующегося на проведение процедур банкротства физических лиц в&nbsp;г.&nbsp;<?= $city->name ?>. Задайте вопрос ниже в форме и в течение дня вы получите ответ на свой вопрос.</p>
                    <p>Ваш контактный Email не публикуется, а используется только для уведомления о получении ответа на ваш вопрос.</p>
                    <p>Консультация по вопросам банкротства физических лиц полностью бесплатна</p>
                </div><!-- .wall -->
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a class="btn btn-default js-hash-nav" href="#faq-form">Задать вопрос</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-7 mb-4 order-xl-1">
                <h2>Ваши вопросы и ответы</h2>
                <div>
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Алиса Нагиева, г. Томск</span>
                                    </p>
                                    <h4>Могут ли уволить за банкротство или отказать в работе?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Валентина, г. Ярославль</span>
                                    </p>
                                    <h4> Может ли пенсионер или инвалид пройти банкротство, заберут ли пенсию?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Василий Савицкий, г. Нижний Новгород</span>
                                    </p>
                                    <h4>Пострадает ли имущество супруги, если я признаю себя банкротом?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Евгения Добронравова, г. Ульяновск</span>
                                    </p>
                                    <h4>Как правильно пройти банкротство?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Елена Мотинская, г. Краснодар</span>
                                    </p>
                                    <h4>Если мы с мужем оба должника, можно ли вместе обратиться в&nbsp;Арбитражный&nbsp;суд?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body bg">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Валентина, г. Ярославль</span>
                                    </p>
                                    <h4> Может ли пенсионер или инвалид пройти банкротство, заберут ли пенсию?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-md">
                                    <p class="row mb-1">
                                        <span class="col-auto">
                                            <span class="bg-primary px-1">2020-04-13 06:02:27</span>
                                        </span>
                                        <span class="col-12 col-lg">Задает: Василий Савицкий, г. Нижний Новгород</span>
                                    </p>
                                    <h4>Пострадает ли имущество супруги, если я признаю себя банкротом?</h4>
                                </div><!-- .col -->
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">Читать ответ</a>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- cart wrapper -->
            </div><!-- .col -->
            <div class="col-12 order-xl-3" id="faq-form">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="label">Ваше имя <span class="red">*</span></label>
                                <input class="input" type="text">
                            </div><!-- .col -->
                            <div class="col-12 col-md-6">
                                <label class="label">Ваш Email <span class="red">*</span></label>
                                <input class="input" type="text">
                            </div><!-- .col -->
                        </div><!-- .row -->

                        <label class="label">Ваш вопрос <span class="red">*</span></label>
                        <textarea class="input" rows="5"></textarea>

                        <div class="row">
                            <div class="col-12 col-md order-md-2">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="em-9 right">Прекрипить файл к сообщению</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="btn-sm btn-default">Прекрипить</span>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto order-md-1">
                                <button class="btn btn-default">Отправить ваш вопрос</button>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-12 col-lg order-xl-2">
                <h2 class="h1">Статьи о банкротстве</h2>
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-12">
                        <div class="mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img" width="100" height="100" src="img/post-th.jpg">
                                        </div>
                                        <div class="col">
                                            <h4>Признаки банкротства, и кому гарантированно не спишут долги</h4>
                                            <div class="wall-divider"></div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <p class="mutted em-9">13:14 11.07.2020</p>
                                                </div>
                                                <div class="col-auto ml-auto">
                                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- cart wrapper -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6 col-xl-12">
                        <div class="mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img" width="100" height="100" src="img/post-th.jpg">
                                        </div>
                                        <div class="col">
                                            <h4>Признаки банкротства, и кому гарантированно не спишут долги</h4>
                                            <div class="wall-divider"></div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <p class="mutted em-9">13:14 11.07.2020</p>
                                                </div>
                                                <div class="col-auto ml-auto">
                                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- cart wrapper -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6 col-xl-12">
                        <div class="mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img" width="100" height="100" src="img/post-th.jpg">
                                        </div>
                                        <div class="col">
                                            <h4>Признаки банкротства, и кому гарантированно не спишут долги</h4>
                                            <div class="wall-divider"></div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <p class="mutted em-9">13:14 11.07.2020</p>
                                                </div>
                                                <div class="col-auto ml-auto">
                                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- cart wrapper -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6 col-xl-12">
                        <div class="mb-4">
                            <div class="cart">
                                <div class="cart-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <img class="img" width="100" height="100" src="img/post-th.jpg">
                                        </div>
                                        <div class="col">
                                            <h4>Признаки банкротства, и кому гарантированно не спишут долги</h4>
                                            <div class="wall-divider"></div>
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <p class="mutted em-9">13:14 11.07.2020</p>
                                                </div>
                                                <div class="col-auto ml-auto">
                                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/index', 'view' => 'dolzhnik-vyplatil-alimentnyj-dolg']) ?>">Читать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .cart-body -->
                            </div><!-- .cart -->
                        </div><!-- cart wrapper -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->