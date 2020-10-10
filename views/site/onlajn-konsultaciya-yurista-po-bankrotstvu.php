<?php

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Бесплатная юридическая консультация по банкротству физических лиц в г. '.$city->name;

$this->params['description'] = 'В рамках программы по оказанию бесплатной первичной юридической помощи гражданам РФ наш сайт совместно с Российской коллегией адвокатов представляет сервис «Бесплатной консультации юриста по банкротству».';

$this->params['breadcrumbs'] = [
    'Бесплатная юридическая консультация. г.&nbsp;'.$city->name,
];

?>
<section class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 mx-auto">
                <h1 class="center">Бесплатная юридическая консультация по банкротству физических лиц&nbsp;в&nbsp;г.&nbsp;<?= $city->name ?></h1>
            </div>
        </div>
        <p>В рамках программы по оказанию бесплатной первичной юридической помощи гражданам РФ наш сайт совместно с Российской коллегией адвокатов представляет сервис <strong>«Бесплатной консультации юриста по банкротству»</strong>.</p>
        <p>Вы можете обратиться со своими вопросами напрямую дежурному «Юрист-консультанту» через окно онлайн-чата или задать свой вопрос по телефонам горячей линии:</p>
        <p>Бесплатный многоканальный номер для всехрегионов РФ:</p>
        <p class="h1">
            <a class="ln-black-primary" href="tel:88005057629">8 (800) 505-76-29</a>
        </p>
        <p>Также вы можете заказать <strong>«Обратный звонок»</strong>. Для этого отправьте свой вопрос, заполнив форму ниже и вам перезвонит юрист на указанный номер.</p>

        <div class="cart">
            <div class="cart-body">
                <div class="row align-items-center no-gutters">
                    <div class="col-auto mr-3">
                        <div class="yur">
                            <img class="yur-img" src="img/yur.jpg">
                        </div>
                    </div><!-- .col -->
                    <div class="col">
                        <p>
                            <strong>Задайте вопрос юристу</strong>
                            <br>
                            и получите бесплатную консультацию в течении 5 минут.
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <textarea class="input" rows="5" placeholder="Текст вашего вопроса"></textarea>
            </div><!-- .cart-body -->
            <div class="carg-body-bg">
                <p> Пример: Недвано оказал посредническую услугу как физическо лицо. Но все пошло не так. Я пытался вернуть всвои деньги, но меня обвинили в мошенничестве, и теперь грозят подать иск в суд или в прокуратуру. Как мне быть в данной ситуации?</p>
            </div>
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-xl-3">
                        <button class="btn btn-default">Задать вопрос</button>
                    </div><!-- .col -->
                    <div class="col-12 col-md-4 col-xl">
                        <p>
                            <strong>Быстро</strong>
                            <br>
                            Заполните форму и уже через 5 минут с вами свяжется юрист.
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md-4 col-xl">
                        <p>
                            <strong>Конфидениально</strong>
                            <br>
                            Все данные будут переданны по защищенному каналу
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
        <div class="my-4"></div>

    </div><!-- .container -->
</section><!-- .section -->