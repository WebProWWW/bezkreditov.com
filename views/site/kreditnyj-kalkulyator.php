<?php

/* @var $this yii\web\View */

$this->title = 'Кредитный калькулятор';
$this->params['description'] = 'Подбор кредита';
$this->params['breadcrumbs'] = ['Кредитный калькулятор'];

?>

<section class="section">
    <div class="container">
        <h1>Кредитный калькулятор онлайн</h1>
        <p class="em-11">Кредитный калькулятор поможет вам рассчитать параметры кредита, а также сравнит переплаты по разным предложениям и подберет для вас самые выгодные варианты.</p>
        <br>
        <div class="row">
            <div class="col-12 col-lg-5">
                <h3>Введите данные для расчета</h3>
                <label class="label">Сумма кредита, ₽</label>
                <input class="input" type="text" data-maskmoney value="30 000 ₽">
                <div class="row">
                    <div class="col">
                        <label class="label">Срок кредита</label>
                        <input class="input" type="text" data-maskint value="2">
                    </div><!-- .col -->
                    <div class="col col-sm-4">
                        <label class="label">&nbsp;</label>
                        <select class="input">
                            <option selected>месяцев</option>
                            <option>дней</option>
                        </select>
                    </div><!-- .col -->
                    <div class="col-12"></div>
                    <div class="col">
                        <label class="label">Ставка, %</label>
                        <input class="input" type="text" data-maskint value="0">
                    </div><!-- .col -->
                    <div class="col col-sm-4">
                        <label class="label">&nbsp;</label>
                        <select class="input">
                            <option selected>в год</option>
                            <option>в день</option>
                        </select>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col">
                <h3>Результат расчета</h3>
                <label class="label d-none d-lg-block">&nbsp;</label>
                <div class="mb-4">
                    <div class="wall-trsp">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p>Переплата по кредиту</p>
                                    </div><!-- .col -->
                                    <div class="col-auto ml-auto">
                                        <p class="fw-600 em-11">0 ₽</p>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="wall-divider"></div>
                                    </div>
                                    <div class="col">
                                        <p>Платёж в месяц</p>
                                    </div><!-- .col -->
                                    <div class="col-auto ml-auto">
                                        <p class="fw-600 em-11">15 000 ₽</p>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="wall-divider"></div>
                                    </div>
                                    <div class="col">
                                        <p>Общая сумма выплат</p>
                                    </div><!-- .col -->
                                    <div class="col-auto ml-auto">
                                        <p class="fw-600 em-11">30 000 ₽</p>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .col -->
                            <div class="col-12 col-sm-auto">
                                <img class="img-center" width="156" src="/img/img-43.svg">
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .wall-trsp -->
                </div><!-- .mb-4 -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1">Лучшие предложения по вашим параметрам</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-8 col-lg-9 col-xl-8">
                                <h3 class="clip mb-0">Почта Банк - Кредитная Карта "Вездедоход"</h3>
                                <p>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.6</span>
                                    <span class="gray">Почта Банк</span>
                                </p>
                            </div><!-- .col -->
                            <div class="col-auto mx-auto">
                                <img class="img img-circle" width="60" src="/img/logo/2.png">
                            </div><!-- .col -->

                            <div class="col-12"></div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Переплата</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">2 400 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Льготный период</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">2 дней</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Кредитный лимит</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">до 1 500 000 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-auto mx-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <p class="center gray"><small>№ 650 от 25.03.2016</small></p>
                        <p class="em-12 fw-600 center"><i class="i-hot red"></i> Выгода 288 621 ₽</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-8 col-lg-9 col-xl-8">
                                <h3 class="clip mb-0">ВТБ - Кредит наличными</h3>
                                <p>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                                    <span class="gray">ВТБ</span>
                                </p>
                            </div><!-- .col -->
                            <div class="col-auto mx-auto">
                                <img class="img img-circle" width="60" src="/img/logo/1.png">
                            </div><!-- .col -->

                            <div class="col-12"></div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Переплата</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">29 491 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Ставка в год</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">от 5,4 %</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Сумма кредита</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">до 5 000 000 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-auto mx-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <p class="center gray"><small>№ 1623 от 29.10.2014</small></p>
                        <p class="em-12 fw-600 center">Выгода 261 531 ₽</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-md-6 col-xl-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-8 col-lg-9 col-xl-8">
                                <h3 class="clip mb-0">Быстроденьги "Бизнес-займ"</h3>
                                <p>
                                    <span class="fw-600"><i class="i-star yellow"></i>&nbsp;4.9</span>
                                    <span class="gray">МФО</span>
                                </p>
                            </div><!-- .col -->
                            <div class="col-auto mx-auto">
                                <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                            </div><!-- .col -->

                            <div class="col-12"></div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Переплата</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">504 000 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Ставка в день</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">от 0.14 %</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-12 col-md">
                                <p class="gray mb-0">Сумма займа</p>
                            </div><!-- .col -->
                            <div class="col-12 col-md-auto">
                                <p class="em-11 fw-600 mb-0">до 5 000 000 ₽</p>
                            </div><!-- .col -->

                            <div class="col-12">&nbsp;</div>

                            <div class="col-auto mx-auto">
                                <a class="btn-default" href="javascript:;">Оформить</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <p class="center gray"><small>№ 2110573000002 от 08.07.2011</small></p>
                        <p class="em-12 fw-600 center"><i class="i-up-s red"></i> Наш партнёр</p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="row mb-3 js-tab-links">
            <div class="col-auto">
                <a class="tab-ln active" data-link="#write-block-id-here" href="javascript:;">
                    Микрозаймы
                </a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#write-block-id-here" href="javascript:;">
                    Кредитные карты
                </a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln" data-link="#write-block-id-here" href="javascript:;">
                    Потребительский кредит
                </a>
            </div><!-- .col -->
        </div><!-- .tab -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/2.png">
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0">Альфа-банк - кредит наличными</h3>
                        <p>
                            <span class="fw-600">
                                <i class="i-star yellow"></i>&nbsp;5
                            </span>
                            <span class="gray">Альфа-банк</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 50 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 1 года</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">30 041 ₽</p>
                        <p class="gray">Переплата</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 49% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/1.png">
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0">Промсвязьбанк - кредит для военнослужащих</h3>
                        <p>
                            <span class="fw-600">
                                <i class="i-star yellow"></i>&nbsp;5
                            </span>
                            <span class="gray">Промсвязьбанк</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 50 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 1 года</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">30 041 ₽</p>
                        <p class="gray">Переплата</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 38% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->

        <div class="cart mb-4">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img class="img img-circle" width="60" src="/img/logo/0-2.png">
                    </div><!-- .col -->
                    <div class="col-12 col-sm-9 col-md-10 col-xl-3">
                        <h3 class="clip mb-0">СКБ-Банк - Потребительский кредит "Простой и удобный"</h3>
                        <p>
                            <span class="fw-600">
                                <i class="i-star yellow"></i>&nbsp;3
                            </span>
                            <span class="gray">СКБ Банк</span>
                        </p>
                    </div><!-- .col -->

                    <div class="col-12 d-lg-none"></div><!-- .col -->

                    <div class="col-12 col-sm-auto ml-xl-auto">
                        <p class="em-13 fw-600 mb-0">от 51 000 ₽</p>
                        <p class="gray">Сумма</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto mx-auto">
                        <p class="em-13 fw-600 mb-0">от 12 мес.</p>
                        <p class="gray">Срок</p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="em-13 fw-600 mb-0">33 349 ₽</p>
                        <p class="gray">Переплата</p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-auto ml-auto">
                        <a class="btn-default" href="javascript:;">Оформить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">
                        <p class="">
                            <a href="javascript:;">
                                Подробнее <i class="i-down"></i>
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            Одобряют 82% заявок
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                Моя вероятность
                            </a>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-sm-auto">
                        <p class="">
                            <a href="javascript:;">
                                <i class="i-add em-11"></i> Сравнить
                            </a>
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Помощь по онлайн-калькулятору</h2>
                <p>Задумываетесь о получении кредита и определяетесь с выбором? Подобрать лучшее предложение поможет кредитный калькулятор, доступный всем посетителям нашего сайта. Простая и удобная программа поможет выполнить все необходимые расчеты онлайн и подыскать оптимальный вариант финансирования.</p>

                <h3 class="h1">Как работать с калькулятором?</h3>
                <p>Калькулятор состоит из двух частей – меню, где указываются параметры кредитования, и раздела с результатами расчета. </p>

                <p><strong>В кредитном калькуляторе можно задать такие условия, как:</strong></p>

                <ul class="ul-circle">
                    <li><p>необходимая сумма кредита в рублях;</p></li>
                    <li><p>период пользования кредитом (в месяцах или днях на выбор);</p></li>
                    <li><p>процентная ставка (годовая или дневная по усмотрению).</p></li>
                </ul>
                <p>Каждая из величин легко изменяется, и на монитор автоматически выводится расчет по введенным значениям.</p>

                <h3 class="h1">Что рассчитывает кредитный калькулятор?</h3>
                <p><strong>В левой части онлайн-сервиса отражаются результаты калькуляции:</strong></p>

                <ul class="ul-circle">
                    <li><p>размер ежемесячного платежа – определяет сумму, которую необходимо будет вносить каждый месяц для закрытия кредита;</p></li>
                    <li><p>размер переплаты – показывает сумму, которую придется выплатить по процентам;</p></li>
                    <li><p>общую сумму выплат за весь период.</p></li>
                </ul>
                <p>Полная информация о кредите выводится на экран меньше чем за секунду.</p>

                <p>В правой части кредитного калькулятора находится диаграмма, которая наглядно демонстрирует зависимость размера выплат от срока и процентной ставки.</p>

                <p>Под блоком с расчетами расположен раздел, в котором отражается перечень кредитных организаций с наиболее выгодными условиями финансирования. Отбор компаний производится автоматически и зависит от указываемых параметров.</p>

                <p><strong>Тут же можно видеть основные характеристики кредитных продуктов:</strong></p>

                <ul class="ul-circle">
                    <li><p>процентную ставку;</p></li>
                    <li><p>льготный период;</p></li>
                    <li><p>первоначальный лимит;</p></li>
                    <li><p>размер переплаты и другие важные характеристики.</p></li>
                </ul>
                <p>Кредитный калькулятор позволяет не только найти предложение с наиболее выгодными условиями, но и оформить заявку онлайн – без посещения офиса.</p>

                <p>Для этого достаточно нажать на кнопку «Оформить» под выбранным предложением. Система сделает быстрое перенаправление на страницу выбранного финансового учреждения. А дальше – заполнение анкеты, рассмотрение заявки и получение средств!</p>
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart mb-4 p-lg-3">
            <div class="cart-body">
                <h2 class="h1">Популярные предложения</h2>
                <h3>Другие калькуляторы</h3>
                <div class="row">
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Кредитный калькулятор</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Калькулятор ипотеки</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Калькулятор кредитных карт</a>
                    </div><!-- .col -->
                    <div class="col-auto mb-3">
                        <a href="javascript:;">Калькулятор микрозаймов</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->
