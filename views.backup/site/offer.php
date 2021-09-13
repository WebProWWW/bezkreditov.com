<?php

use app\models\Unicom;

/* @var $this yii\web\View */
/* @var $model app\models\Unicom */

$this->title = 'Ипотека «На квартиру» от Альфа-банка';
$this->params['description'] = 'Ипотека «На квартиру» от Альфа-банка';
$this->params['breadcrumbs'] = $model->breadcrumbs;

$offer = $model->offer;

?>
<section class="section" style="position: relative; overflow: hidden; background: <?= Unicom::MORTGAGE_COLOR ?>;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <h1>Ипотека «На&nbsp;квартиру» от&nbsp;Альфа&nbsp;-&nbsp;банка</h1>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto mr-2">
                        <img class="img img-circle" width="60" src="<?= $offer->logo ?>">
                    </div>
                    <div class="col">
                        <p class="clip em-13"><?= $offer->name ?></p>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-12 col-lg align-self-end">
                <img class="img-promo" src="<?= Unicom::MORTGAGE_IMG ?>" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<?= dump($offer) ?>


<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 col-lg-4 order-md-2">
                <p class="h1">
                    <span class="em-11">0/5</span>
                    <span class="em-9"><i class="i-star gray"></i>&nbsp;<i class="i-star gray"></i>&nbsp;<i class="i-star gray"></i>&nbsp;<i class="i-star gray"></i>&nbsp;<i class="i-star gray"></i></span>
                    <span class="em-6 d-block">0 отзывов</span>
                </p>
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <p><a class="btn-trsp" href="javascript:;">Обзор ипотеки</a></p>
                    </div>
                    <div class="col-12 col-xl-6">
                        <p><a class="btn-trsp" href="javascript:;">Сравнить</a></p>
                    </div>
                    <div class="col-12 col-xl-12">
                        <p><a class="btn-default" href="javascript:;">Оформить ипотеку</a></p>
                    </div>
                </div>
            </div><!-- .col -->
            
            <div class="col-12 col-md-8 col-lg-8 order-md-1">
                <p>Лицензия № 1326 от 16.01.2015</p>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="circle-i em-16">
                                    <i class="i-rub"></i>
                                </p>
                            </div>
                            <div class="ml-3">
                                <p class="fw-600 mb-1">
                                    До 20 000 000 ₽
                                </p>
                                <p class="gray">
                                    Сумма кредита
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="circle-i em-16">
                                    <i class="i-date"></i>
                                </p>
                            </div>
                            <div class="ml-3">
                                <p class="fw-600 mb-1">
                                    До 30 лет
                                </p>
                                <p class="gray">
                                    Срок
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="circle-i em-16">
                                    <i class="i-percent"></i>
                                </p>
                            </div>
                            <div class="ml-3">
                                <p class="fw-600 mb-1">
                                    от 6,5%
                                </p>
                                <p class="gray">
                                    Ставка в год
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="circle-i em-16">
                                    <i class="i-pie"></i>
                                </p>
                            </div>
                            <div class="ml-3">
                                <p class="fw-600 mb-1">
                                    от 20%
                                </p>
                                <p class="gray">
                                    Первоначальный взнос
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="circle-i em-16">
                                    <i class="i-clock"></i>
                                </p>
                            </div>
                            <div class="ml-3">
                                <p class="fw-600 mb-1">
                                    От 1-3 дня
                                </p>
                                <p class="gray">
                                    Время рассмотрения
                                </p>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->

        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">ВЫГОДНЫЕ УСЛОВИЯ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">БЫСТРОЕ ПРИНЯТИЕ РЕШЕНИЯ</a>
            </div>
            <div class="col-auto">
                <a class="btn-trsp btn-sm px-2 em-7" href="javascript:;">ДОСРОЧНОЕ ПОГАШЕНИЕ</a>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<div class="container">
    <div class="row js-tab-links">
        <div class="col-auto">
            <a class="tab-ln active" data-link="#card-desc-tab-1" href="javascript:;">Условия</a>
        </div><!-- .col -->
        <div class="col-auto">
            <a class="tab-ln" data-link="#card-desc-tab-2" href="javascript:;">Экспертиза «Без&nbsp;Кредитов»</a>
        </div><!-- .col -->
        <div class="col-auto">
            <a class="tab-ln" data-link="#card-desc-tab-3" href="javascript:;">Требования</a>
        </div><!-- .col -->
        <div class="col-auto">
            <a class="tab-ln" data-link="#card-desc-tab-4" href="javascript:;">Выдача и погашение</a>
        </div><!-- .col -->
    </div><!-- .row -->
</div>

<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="js-tab-contents">
                                <div class="tab-content active" id="card-desc-tab-1" style="opacity: 1;">
                                    <h3 class="h1">Условия</h3>
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Бонусы</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">0 - 0% на карту</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Тип карты</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>кредитная</li>
                                                <li>Mastercard Standard</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Технологические особенности</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>Технология 3D Secure</li>
                                                <li>Чип</li>
                                                <li>Бесконтактные платежи (payWave)</li>
                                                <li>Apple Pay</li>
                                                <li>Samsung Pay</li>
                                                <li>Google Pay</li>
                                                <li>Бесконтактные платежи PayPass</li>
                                                <li>Кошелёк Pay</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Стоимость открытия</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">0 ₽</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Стоимость обслуживания</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">бесплатно</p>
                                            <p>Бесплатно при соблюдении одного из условий:</p>
                                            <ul class="ul-circle">
                                                <li>0 ₽ первый год</li>
                                            </ul>
                                            <p>В иных случаях:</p>
                                            <p>от 590-1490 руб: для всех категорий заемщиков в т.ч. клиентов банка, получающих з/п на карту Альфа-банка</p>
                                            <p>стоимость комиссии зависит от наличия пакета услуг или активной дебетовой карты</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Проценты на остаток</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">0 - 0%</p>
                                            <ul class="ul-circle">
                                                <li>не начисляются</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Лимиты по операциям</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>снятие наличных: до 300 000 руб. в месяц</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Снятие наличных в банкоматах и офисах собственного банка</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>0% - до 50 000 руб;</li>
                                                <li>более 50 000 ₽/мес (взимается с суммы разницы) - 5,9%, минимум 500 рублей</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Снятие наличных в банкоматах и офисах других банков</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>0% - до 50 000 руб;</li>
                                                <li>более 50 000 ₽/мес (взимается с суммы разницы) - 5,9%, минимум 500 рублей</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>SMS-уведомления</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">0 ₽/мес.</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Дополнительные условия</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p class="fw-600">СМС-информирование (услуга "Альфа-чек"):</p>
                                            <ul class="ul-circle">
                                                <li>99 руб. ежемесячно, начиная со второго месяца</li>
                                            </ul>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-content -->
                                <div class="tab-content" id="card-desc-tab-2">
                                    <h3 class="h1">Экспертиза «Без&nbsp;Кредитов»</h3>
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <h3>Преимущества</h3>
                                            <ul class="ul-circle">
                                                <li><p>Длительный льготный период на покупки и снятие наличных</p></li>
                                                <li><p>Максимальный возраст заемщика не ограничен</p></li>
                                            </ul>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <h3>Недостатки</h3>
                                            <ul class="ul-circle-red">
                                                <li><p>При сумме кредитного лимита более 200 000 руб требуются документы о подтверждении доходов</p></li>
                                            </ul>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-content -->
                                <div class="tab-content" id="card-desc-tab-3">
                                    <h3 class="h1">Требования</h3>
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Возраст</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>18 - 100 лет</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Категория заемщиков</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>Любая</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Гражданство РФ</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>Требуется</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Регистрация</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>Постоянная на территории РФ</li>
                                                <li>Постоянная в регионе присутствия банка</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Необходимые документы</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>Паспорт РФ</li>
                                                <li>Водительское удостоверение</li>
                                                <li>Именная банковская карта</li>
                                                <li>СНИЛС</li>
                                                <li>Справка о доходах</li>
                                            </ul>
                                            <p>до 50 000 при предоставление паспорта РФ от 50 000 руб. 200 000 - паспорт РФ и любой документ (водительское удостоверение, СНИЛС или карта другого банка) от 200 000 - паспорт РФ и любой документ (водительское удостоверение, СНИЛС или карта другого банка), справка о доходах (2-НДФЛ или справка по форме банка)</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Подтверждение дохода</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>Не требуется</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Минимальный доход</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>От 5 000 ₽</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Стаж на последнем месте работы</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>От 3 месяцев</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Дополнительные требования</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <ul class="ul-circle">
                                                <li>Мобильный телефон</li>
                                                <li>Электронная почта</li>
                                                <li>Постоянный источник дохода</li>
                                                <li>Домашний телефон</li>
                                            </ul>
                                            <p>Минимальный ежемесячный доход:</p>
                                            <ul class="ul-circle">
                                                <li>для жителей Москвы — от 9000 рублей;</li>
                                                <li>для региональных заёмщиков — от 5000 рублей</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-content -->
                                <div class="tab-content" id="card-desc-tab-4">
                                    <h3 class="h1">Условия кредитования</h3>
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Кредитный лимит</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>До 500 000 ₽</p>
                                            <ul class="ul-circle">
                                                <li>Кредитный лимит определяются индивидуально для каждого клиента</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Проценты</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>0 - 38.51% в год</p>
                                            <ul class="ul-circle">
                                                <li>0% - в рамках льготного периода</li>
                                                <li>После льготного периода:</li>
                                                <li>от 11,99 % - минимальная ставка для оплаты покупок</li>
                                                <li>от 23,99 - мин. ставка по снятию наличных</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Льготный период</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>100 дней</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Ежемесячный платеж</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>от 3%</p>
                                            <ul class="ul-circle">
                                                <li>от 3% до 10% от суммы задолженности , мин. 300 руб.</li>
                                            </ul>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="col-12 col-sm">
                                            <p>Нарушение обязательств</p>
                                        </div><!-- .col -->
                                        <div class="col-12 col-sm">
                                            <p>20% годовых (неустойка при допущении просроченной задолжности по оплате мин. платежа)</p>
                                            <div class="divider"></div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .tab-content -->
                            </div><!-- .js-tab-contents -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div><!-- .mb-4 -->
            </div><!-- .col -->

            <div class="col-12 col-lg-4 align-self-start mb-4">
                <div class="cart mb-4">
                    <div class="cart-body">
                        <h3>Похожие предложения</h3>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img class="img img-circle" width="60" src="/img/logo/2.png">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-3 col-md-5 col-lg-8">
                                <p class="clip">
                                    <span class="fw-600">Займер</span>
                                    <br>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                                    <span class="gray em-9">Займер</span>
                                </p>
                            </div><!-- .col -->

                            <div class="col-12 d-none d-lg-block"></div><!-- .col -->

                            <div class="col-12 col-sm-auto mx-auto ml-lg-0">
                                <p class="fw-600 mb-0">от 20 000 ₽</p>
                                <p class="gray em-9">Сумма</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="fw-600 mb-0">от 36 мес.</p>
                                <p class="gray em-9">Срок</p>
                            </div><!-- .col -->
                        </div><!-- .row -->

                        <div class="divider"></div>

                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img class="img img-circle" width="60" src="/img/logo/1.png">
                            </div><!-- .col -->
                            <div class="col-12 col-sm-3 col-md-5 col-lg-8">
                                <p class="clip">
                                    <span class="fw-600">еКапуста</span>
                                    <br>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.4</span>
                                    <span class="gray em-9">еКапуста</span>
                                </p>
                            </div><!-- .col -->

                            <div class="col-12 d-none d-lg-block"></div><!-- .col -->

                            <div class="col-12 col-sm-auto mx-auto ml-lg-0">
                                <p class="fw-600 mb-0">от 100 000 ₽</p>
                                <p class="gray em-9">Сумма</p>
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <p class="fw-600 mb-0">от 36 мес.</p>
                                <p class="gray em-9">Срок</p>
                            </div><!-- .col -->
                        </div><!-- .row -->

                        <div class="divider"></div>

                        <div class="row">
                            <div class="col-auto mx-auto">
                                <a class="btn-default" href="javascript:;">Все кредиты</a>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->

            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Как получить ипотеку</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-stamp"></i>
                        </div>
                        <p>Подберите лучшие условия по предложению с помощью фильтров</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-hand"></i>
                        </div>
                        <p>Ознакомьтесь с условиями оформления перед подачей заявки</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <div class="circle-i em-30 mx-auto">
                            <i class="i-edit"></i>
                        </div>
                        <p>Нажмите кнопку “Оформить заявку” и заполните анкету на сайте банка</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Отзывы клиентов</h2>
        <div class="mb-4">
            <div class="cart">
                <div class="cart-body">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img img-circle" width="60" src="/img/ava.svg">
                        </div><!-- .col -->
                        <div class="col-12 col-md">
                            <h3 class="mb-1">Вячеслав</h3>
                            <p>
                                <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto">
                            <p>16 мая 2021</p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p>Оставил на сайте заявку на кредит, мне сразу же перезвонили, сказали, какие документы принести в банк. Пришлось брать справку 2-НДФЛ за два года, зато одобрили быстро.</p>
                </div><!-- .cart-body -->

                <div class="divider mb-1"></div>

                <div class="cart-body">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img img-circle" width="60" src="/img/ava.svg">
                        </div><!-- .col -->
                        <div class="col-12 col-md">
                            <h3 class="mb-1">Сергеев Григорий</h3>
                            <p>
                                <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto">
                            <p>16 мая 2021</p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p>Заявку на кредит рассмотрели и одобрили быстро. Условия устраивают, процентная ставка не большая. Плачу ежемесячно, в срок, проблем еще ни разу не было.</p>
                </div><!-- .cart-body -->

                <div class="divider mb-1"></div>

                <div class="cart-body">
                    <div class="row">
                        <div class="col-auto">
                            <img class="img img-circle" width="60" src="/img/ava.svg">
                        </div><!-- .col -->
                        <div class="col-12 col-md">
                            <h3 class="mb-1">Шомко Татьяна Петровна</h3>
                            <p>
                                <i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>&nbsp;<i class="i-star yellow"></i>
                            </p>
                        </div><!-- .col -->
                        <div class="col-12 col-md-auto">
                            <p>16 мая 2021</p>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <p>Нужны были средства на нормальный Евро-ремонт. Обратилась в Альфа, менеджеры умеют убеждать. Условия были подходящие, оформила кредит, деньги получила быстро. Довольна отношением к клиенту и профессионализмом сотрудников.</p>
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .mb-4 -->
    </div><!-- .container -->
</section><!-- .section -->