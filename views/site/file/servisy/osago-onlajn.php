<?php

/* @var $this yii\web\View */
/* @var $page app\models\Page */

$this->title = $page->child->title;
$this->params['description'] = $page->child->description;
$this->params['breadcrumbs'] = [
    [
        'label' => $page->label,
        'url' => ['site/index', 'alias' => $page->alias],
    ],
    $page->child->label
];

?>

<section class="section" style="position: relative; overflow: hidden; background: #FCD900;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Оформите ОСАГО <br>онлайн и с выгодой!</h1>
                <p class="em-11">
                    Рассчитайте точную стоимость с учетом скидок, оплатите банковской картой и получите полис на электронную почту.
                </p>
                <p class="em-11">
                    Пользователи сервиса экономят до 1 259 ₽ за счет сравнения страховых предложений 
                </p>
                <div class="row">
                    <div class="col-auto">
                        <a class="btn-red js-hash-nav" href="#osago-onlajn-oformit-polis">Оформить полис</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 align-self-end">
                <img class="img-center" width="430" src="/img/img-48.jpg" style="margin-bottom: -11px;">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="js-slick-slider">
            <div><img alt="Сбер" height="40" src="/img/bank/62a48a2.png"></div>
            <div><img alt="ВТБ" height="40" src="/img/bank/0009d28.png"></div>
            <div><img alt="Альфа" height="40" src="/img/bank/6767da6.png"></div>
            <div><img alt="Тинькоф" height="40" src="/img/bank/ce31023.png"></div>
            <div><img alt="Хоум Кредит" height="40" src="/img/bank/54c967b.png"></div>
            <div><img alt="Райфайзен" height="40" src="/img/bank/2609620.png"></div>
            <div><img alt="Открытие" height="40" src="/img/bank/f10a131.png"></div>
            <div><img alt="МТС" height="40" src="/img/bank/4ade6af.png"></div>
            <div><img alt="Почта банк" height="40" src="/img/bank/01dce8b.png"></div>
            <div><img alt="Совкомбанк" height="40" src="/img/bank/c8fd5e5.png"></div>
            <div><img alt="Ситибанк" height="40" src="/img/bank/459b6fa.png"></div>
            <div><img alt="Газпром" height="40" src="/img/bank/5a07530.png"></div>
            <div><img alt="ПСБ" height="40" src="/img/bank/b6818a4.png"></div>
            <div><img alt="Россельхозбанк" height="40" src="/img/bank/da2816f.png"></div>
            <div><img alt="Уралсиб" height="40" src="/img/bank/4a2f629.png"></div>
            <div><img alt="Юникредит" height="40" src="/img/bank/834f84e.png"></div>
            <div><img alt="Восточный" height="40" src="/img/bank/7fd0130.png"></div>
            <div><img alt="Ак барс банк" height="40" src="/img/bank/f34b31f.png"></div>
            <div><img alt="АТБ Банк" height="40" src="/img/bank/0f0e506.png"></div>
            <div><img alt="Экспо банк" height="40" src="/img/bank/7225f86.png"></div>
        </div><!-- .js-slick-slider -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <p class="em-34 primary"><i class="i-bal"></i></p>
                        <h3>
                            Легально
                        </h3>
                        <p>
                            Мы полностью гарантируем легальность выдаваемых полисов. Вы можете сразу же подтвердить статус ОСАГО.
                        </p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <p class="em-34 primary"><i class="i-rub"></i></p>
                        <h3>
                            Выгодно
                        </h3>
                        <p>
                            Оформить полис у нас выгоднее, чем напрямую у страховых компаний.  Экономия может составить несколько тысяч рублей!
                        </p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <p class="em-34 primary"><i class="i-up-s"></i></p>
                        <h3>
                            Комфортно
                        </h3>
                        <p>
                            Мы предлагаем максимально удобный сервис: ваш полис ОСАГО будет оформлен онлайн и всего за несколько минут.
                        </p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="cart">
                    <div class="cart-body center">
                        <p class="em-34 primary"><i class="i-darts"></i></p>
                        <h3>
                            Точно
                        </h3>
                        <p>
                            Наш сервис рассчитает точную стоимость полиса, исходя из вашего водительского стажа и параметров автомобиля.
                        </p>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg" id="osago-onlajn-oformit-polis">
    <div class="container">
        <h2 class="h1 center">Заполните форму и мы пришлем решения банков по SMS</h2>
        <p class="em-11 center">Вероятность одобрения кредита при полном заполнении формы почти 100%.</p>
        <div class="cart mb-4">
            <div class="row align-items-center no-gutters">
                <div class="col-12 col-md-auto p-lg-4">
                    <div class="cart-body">
                        <p class="h2 mb-0">Одна заявка</p>
                        <p class="em-12">В несколько банков</p>
                        <p>&nbsp;</p>
                        <p class="h2 mb-0">Выгодно</p>
                        <p class="em-12">Низкий процент</p>
                        <p>&nbsp;</p>
                        <p class="h2 mb-0">Одобрение</p>
                        <p class="em-12">В день подачи</p>
                    </div><!-- .cart-body -->
                </div><!-- .col -->
                <div class="col-auto align-self-stretch d-none d-md-block">
                    <div class="divider-dark-v"></div>
                </div><!-- .col -->
                <div class="col-12 col-md p-lg-4">
                    <div class="cart-body">
                        <h2 class="center">Введите&nbsp;номер&nbsp;автомобиля, узнайте&nbsp;стоимость и&nbsp;оформите&nbsp;ОСАГО&nbsp;онлайн</h2>
                        <div class="row">
                            <div class="col-12 col-lg">
                                <input class="input" type="text" placeholder="Введите номер автомобиля">
                            </div><!-- .col -->
                            <div class="col-12 col-lg-auto">
                                <a class="btn-default" href="javascript:;">Расчитать</a>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <label class="label d-flex align-items-center mb-4">
                            <span class="d-block">
                                <input type="hidden" name="FormLogin[remember]" value="0">
                                <input type="checkbox" class="checkbox checkbox-sm" name="FormLogin[remember]" value="1" checked="">
                            </span>
                            <span class="d-block">Я даю согласие на <a href="javascript:;">обработку персональных данных</a> и согласен с <a href="javascript:;">договором оферты</a>.</span>
                        </label>
                        <label class="label d-flex align-items-center mb-4">
                            <span class="d-block">
                                <input type="hidden" name="FormLogin[remember]" value="0">
                                <input type="checkbox" class="checkbox checkbox-sm" name="FormLogin[remember]" value="1" checked="">
                            </span>
                            <span class="d-block">Я даю согласие на <a href="javascript:;">получение персональных рассылок</a> с помощью SMS и email.</span>
                        </label>
                        <p class="center em-9"><a href="javascript">Заполню данные автомобиля самостоятельно</a></p>
                        <h3 class="center">Оформление полиса за 5 минут всего по трем документам</h3>
                        <div class="row">
                            <div class="col">
                                <img class="img-center" width="90" src="/img/img-doc-1.png">
                            </div><!-- .col -->
                            <div class="col">
                                <img class="img-center" width="90" src="/img/img-doc-2.png">
                            </div><!-- .col -->
                            <div class="col">
                                <img class="img-center" width="90" src="/img/img-doc-3.png">
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Часто задаваемые вопросы</h2>
        <div class="cart pt-4 mb-4">
            <p class="em-13 px-4 pointer d-flex align-items-center i-down-trans" data-toggle="#faq-content-1">
                <a class="ln-black-primary" href="javascript:;">
                    Зачем оформлять ОСАГО?
                </a>
                <i class="i-down ml-auto"></i>
            </p>
            <div class="px-4" style="display: none;" id="faq-content-1">
                <p>Конечно, мы делаем все, чтобы у вас был максимально широкий выбор. Вы сможете взять деньги там, где захотите.</p>
            </div>
            <div class="divider-dark"></div>
            <p class="em-13 px-4 pointer d-flex align-items-center i-down-trans" data-toggle="#faq-content-2">
                <a class="ln-black-primary" href="javascript:;">
                    Что такое е-ОСАГО? Обязательно ли распечатывать полис?
                </a>
                <i class="i-down ml-auto"></i>
            </p>
            <div class="px-4" style="display: none;" id="faq-content-2">
                <p>Очень просто. Заявка - одобрение - получение решения - выдача денег. Максимально быстро и удобно.</p>
            </div>
            <div class="divider-dark"></div>
            <p class="em-13 px-4 pointer d-flex align-items-center i-down-trans" data-toggle="#faq-content-3">
                <a class="ln-black-primary" href="javascript:;">
                    От чего зависит стоимость ОСАГО?
                </a>
                <i class="i-down ml-auto"></i>
            </p>
            <div class="px-4" style="display: none;" id="faq-content-3">
                <p>Мы сэкономим ваше время и отправим заявку только в те банки, которые больше всего подходят вам по вашему кредитному рейтингу. Таким образом, вы сможете получить деньги максимально быстро.</p>
            </div>
            <div class="divider-dark"></div>
            <p class="em-13 px-4 pointer d-flex align-items-center i-down-trans" data-toggle="#faq-content-4">
                <a class="ln-black-primary" href="javascript:;">
                    Что такое КБМ и как не потерять скидку?
                </a>
                <i class="i-down ml-auto"></i>
            </p>
            <div class="px-4" style="display: none;" id="faq-content-4">
                <p>100% гарантию дать не можем, но алгоритмы Юником24 работают с высочайшей точностью и отправляют заявки в банки, которые выдадут вам деньги с максимальной вероятностью.</p>
            </div>
            <div class="divider-dark"></div>
            <p class="em-13 px-4 pointer d-flex align-items-center i-down-trans" data-toggle="#faq-content-5">
                <a class="ln-black-primary" href="javascript:;">
                    Какой полис ОСАГО стоит дешевле - электронный или оформленный у агента?
                </a>
                <i class="i-down ml-auto"></i>
            </p>
            <div class="px-4" style="display: none;" id="faq-content-5">
                <p>Все зависит от банка, но в среднем - на следующий день после одобрения. Если повезет - можно и день в день.</p>
            </div>
        </div><!-- .cart -->
    </div><!-- .container -->
</section><!-- .section -->