<?php

use app\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Кредитные карты';
$this->params['description'] = 'Кредитные карты от банков России с процентной ставкой от 0% - на Без кредитов можно оформить кредитную карту онлайн, сравнив предложения от популярных банков России. Изучите условия по процентным ставкам, льготному периоду, стоимости обслуживания. Онлайн-заявка на кредитную карту в два клика!';
$this->params['breadcrumbs'] = ['Кредитные карты'];

?>

<section class="section bg" style="position: relative; overflow: hidden; background: #DADAE6;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Кредитные карты</h1>
                <p class="em-11">
                    Кредитные карты от банков России с процентной ставкой от&nbsp;0%&nbsp;-&nbsp;на 
                    &laquo;Без&nbsp;кредитов&raquo; можно оформить кредитную карту онлайн, сравнив 
                    предложения от популярных банков России. Изучите условия по 
                    процентным ставкам, льготному периоду, стоимости обслуживания. 
                    Онлайн-заявка на кредитную карту в два клика!
                </p>
                <p class="em-11">
                    На 06.05.2021 количество предложений - 89.
                </p>
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-center" width="430" src="/img/img-50.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <label class="label">Сумма кредита</label>
                <select class="input">
                    <option selected>от 50 000 ₽</option>
                    <option>от 100 000 ₽</option>
                    <option>от 150 000 ₽</option>
                    <option>от 200 000 ₽</option>
                    <option>от 300 000 ₽</option>
                    <option>от 500 000 ₽</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-md">
                <label class="label">Льготный период</label>
                <select class="input">
                    <option selected>Любой</option>
                    <option>30 дней</option>
                    <option>50 дней</option>
                    <option>90 дней</option>
                    <option>120 дней</option>
                </select>
            </div><!-- .col -->
            <div class="col-12 col-md-auto">
                <label class="label d-none d-md-block">&nbsp;</label>
                <button class="btn-default">Показать</button>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Рекомендуем лучшие кредитные карты банков</h2>
        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-a.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта «100 дней без процентов» Mastercard Standard от Альфа-банка
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 500 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 12 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-1" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 45% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 1952 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-1" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-mts.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта «Универсальная MTS CASHBACK»
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">МТС Банк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 500 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 1 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-2" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 60% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 252 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-2" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-xalva.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта рассрочки Халва
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">Совкомбанк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 350 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 1 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-3" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 43% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 252 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-3" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Подобрать кредитную карту</h2>
        <p>Показано 89 кредитных карт из 89 доступных</p>
        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-a-v.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта «100 дней без процентов» Visa Platinum от Альфа-банка
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 1 000 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-4" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 37% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 1952 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-4" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-a-m.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта «100 дней без процентов» Mastercard Platinum
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 1 000 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-5" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 60% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 252 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-5" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-auto">
                        <img class="img" width="241" src="/img/card-a-vc.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3>
                            <a href="<?= Url::toView('karta-100-dnej-bez-procentov-mastercard-standard-ot-alfa-banka') ?>">
                                Карта «100 дней без процентов» Visa Classic
                            </a>
                        </h3>
                        <p>
                            <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">до 500 000 ₽</p>
                                <p class="gray">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 12 мес.</p>
                                <p class="gray">Срок</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="em-13 fw-600 mb-0">от 0,0%</p>
                                <p class="gray">Ставка</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-auto">
                        <p class="">
                            <a class="i-down-trans" data-toggle="#more-info-card-6" href="javascript:;">
                                Подробнее
                                <i class="i-down d-inline-block em-9"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            Одобряют 43% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">Моя вероятность</a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-8 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class=" i-char"></i> 252 кредита(ов)
                            </a>
                            - выдано сегодня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-4 col-lg-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div id="more-info-card-6" style="display: none; overflow: hidden;">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col-12 col-md">
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Стоимость обслуживания:
                                </span>
                                <span class="col-6 fw-600">
                                    бесплатно
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Время рассмотрения:
                                </span>
                                <span class="col-6 fw-600">
                                    2 мин - 1 день
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Требуемый рейтинг:
                                </span>
                                <span class="col-6 fw-600">
                                    -
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Возраст:
                                </span>
                                <span class="col-6 fw-600">
                                    18 - 100 лет
                                </span>
                            </p>
                            <p class="row align-items-end">
                                <span class="col-6 gray">
                                    Лицензия:
                                </span>
                                <span class="col-6 fw-600">
                                    № 1326 от 16.01.2015
                                </span>
                            </p>
                            <div class="row">
                                <div class="col-12 col-md-auto">
                                    <a class="btn-trsp" href="javascript:;">Перейти</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-auto d-none d-lg-block mb-3">
                            <div class="divider-v"></div>
                        </div><!-- .col -->
                        <div class="col-12 col-md-5">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="img" width="60" src="/img/ava-w.svg">
                                </div><!-- .col -->
                                <div class="col">
                                    <p class="mb-1 fw-600">Александра</p>
                                    <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i></p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <p>Хорошо, что есть такой банк как этот, в выходные не найдёшь в центре банков по обмену валют, а тут всё работает, и курс очень хороший. Отличные кассиры и сервис на высоте!</p>
                            <p><a href="javascript:;">Все отзывы</a></p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- #more-info-card-1 -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="row">
            <div class="col-auto mx-auto">
                <a class="btn-default" href="javascript:;">Показать еще 20 из 89</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-date"></i>
                        </div>
                        <h3>Льготный период до 240 дней</h3>
                        <p>Возвращайте деньги без переплат более полугода!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-card"></i>
                        </div>
                        <h3>Кредитный лимит до 3&nbsp;000&nbsp;000&nbsp;рублей</h3>
                        <p>Суммы, на которые можно позволить себе даже квартиру!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-undo"></i>
                        </div>
                        <h3>Кэшбэк до 30%</h3>
                        <p>Зарабатывайте на карте, не платя проценты!</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Последние отзывы о кредитных картах</h2>
        <div class="cart">
            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img" width="80" src="/img/card-a-vc.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Кредитная карта «Alfa Travel» от Альфа-Банк</h3>
                        <p><i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i> Александра</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>17 апр. 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Хотелось бы чтобы обслуживание было бесплатное как в большинстве других карт а не 990 р. Исключая этот момент данная карта вещь удобная. Большой кредитный лимит.</p>
            </div><!-- .cart-body -->

            <div class="divider mb-1"></div>

            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img" width="80" src="/img/card-a-m.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Карта «100 дней без процентов» Mastercard Platinum</h3>
                        <p>
                            <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            Оксана
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>17 апр. 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Хотелось бы чтобы обслуживание было бесплатное как в большинстве других карт а не 990 р. Исключая этот момент данная карта вещь удобная. Большой кредитный лимит.</p>
            </div><!-- .cart-body -->

            <div class="divider mb-1"></div>

            <div class="cart-body">
                <div class="row">
                    <div class="col-auto">
                        <img class="img" width="80" src="/img/card-xalva.png">
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <h3 class="mb-1">Кредитная карта «Alfa Travel» от Альфа-Банк</h3>
                        <p>
                            <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            Аня
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto">
                        <p>17 апр. 2021</p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>Карту возможностей мне сестра очень разрекламировала. И я также решила заиметь и себе ).  Здорово, что обслуживание бесплатное).  Условия очень привлекательные.</p>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Как оформить кредитную карту онлайн</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>С помощью фильтров подберите лучшее предложение из доступных</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
                        </div>
                        <p>Перед оформлением карты ознакомьтесь с условиями на странице предложения</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-edit"></i>
                        </div>
                        <p>Нажмите на кнопку “Оформить” и заполните анкету на сайте банка</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Кредитные карты: памятка клиента</h2>
                <p>Банковские кредитные карты - это выгодный и удобный продукт, который при грамотном подходе позволяют решить финансовые проблемы.</p>
                <p>Особенность кредитных карт в том, что банки предоставляют своим клиентам льготный период, в течение которого не нужно будет уплачивать проценты.  Кроме того, деньги, которые предоставляются банком, не требуют целевого использования, а значит их можно использовать на свое усмотрение.</p>
                <h3 class="h1">Плюсы и минусы</h3>
                <p>К преимуществам кредитных карт можно отнести то, что:</p>
                <ul class="ul-circle">
                    <li>банки могут принять заявку на оформление кредитки онлайн;</li>
                    <li>владельцы карт могут рассчитывать на скидки и бонусы от компаний-партнеров;</li>
                    <li>льготный период позволяет пользоваться деньгами без уплаты процентов;</li>
                    <li>решение о выдаче карты принимается онлайн;</li>
                    <li>лимит на карте обновляется.</li>
                </ul>
                <p>К минусам можно отнести:</p>
                <ul class="ul-circle">
                    <li>снятие наличных средств без процентов не предусмотрено;</li>
                    <li>нельзя получить большой лимит по карте без подтверждения доходов.</li>
                </ul>
                <h3 class="h1">Как оформить кредитную карту онлайн?</h3>
                <p>На портале “Без кредитов” представлен список проверенных банков выдачи кредитных карт, которые предлагают выбрать и оформить заявку на кредитную карту на выгодных условиях. На данный момент доступно 89 предложений.</p>
                <p>Чтобы получить кредитную карту, достаточно ознакомиться с предложениями банков на этой странице и заполнить анкету, кликнув на кнопку "Оформить". В анкете необходимо будет подтвердить выбранные условия и заполнить паспортные данные. Если вы подходите под минимальные требования банка, то вам одобрят кредитную карту с максимальным лимитом.</p>
                <p>Когда карта будет готова, вам придет уведомление через СМС и на электронную почту.</p>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Популярные предложения</h2>
                <h3>Условия кредитных карт</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">По почте</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С льготным периодом</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Моментальные</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Карта рассрочки</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Бесплатные</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">100 дней без процентов</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Для категории клиентов</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Без трудоустройства</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Молодежные</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С 18 лет</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Безработным</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Пенсионерам</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Студентам</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>По типу</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С плохой кредитной историей</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Мастеркард</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Виртуальная карта</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Для снятия наличных</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С кэшбеком</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Срочные</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <h3>Лучшие условия</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">По почте</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">С льготным периодом</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Моментальные</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Карта рассрочки</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Бесплатные</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">100 дней без процентов</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->