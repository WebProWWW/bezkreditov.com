<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
use app\models\Material;
use app\models\Company;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Актуальные новости по банкротству физических лиц г. '.$city->name;
$this->params['description'] = 'Бесплатный онлайн тест на списание долгов от портала «Без Кредитов» Хватит гадать пора действовать! Пройдите бесплатный онлайн тест и получите предварительное решение о списании ваших долгов* прямо на почту или смс на ваш телефон';

?>
<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Бесплатный онлайн тест на списание долгов от портала «Без&nbsp;Кредитов»</h2>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg order-lg-2 z-2">
                <h2 class="h2 fw-400 center" style="margin-bottom: 30px">
                    <em>
                        - Смогу ли я списать свои долги через банкротство?
                        <br>
                        - А долги все спишут или частично?
                    </em>
                </h2>
                <h3 class="center h2">Хватит гадать пора действовать!</h3>
                <div class="wall arrow-lg">
                    <p>Пройдите бесплатный онлайн тест и получите предварительное решение о&nbsp;списании ваших долгов* прямо на почту</p>
                </div><!-- .wall -->
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a class="btn btn-default" data-fancybox href="#test">Пройти тест</a>
                    </div><!-- .col -->
                </div><!-- .row -->
                <p>*<small> По 127 Федеральному закону «О банкротстве» можно списать следующие долги: Кредиты и займы. Просрочки по кредитам и кредитными картам. Административные штрафы, долги за коммунальные услуги. Задолженность и пени по налогам.</small></p>
            </div><!-- .col -->
            <div class="col-12 col-lg-auto align-self-end order-md-1 z-1">
                <img class="img-center" width="480" style="margin-bottom: -10px" src="/img/block-img-1.jpg">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Лучшие компании по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
            <?php foreach (Company::findTop() as $company): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-body px-xl-5">
                            <div class="row align-items-center justify-content-center my-auto">
                                <div class="col-auto">
                                    <div style="padding: 0 12px">
                                        <img class="klogo" width="46" src="<?= $company->logoImg ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="fw-600"><?= $company->name ?></h4>
                                </div>
                            </div>
                            <div class="cart-divider"></div>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="percent-circle">
                                                <span data-circle-percent="<?= $company->percent ?>"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p>Количество<br>успешных&nbsp;дел</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="em-16 center" style="width: 70px">
                                                <i class="i-star primary"></i> <?= $company->rate ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                        <div class="cart-footer">
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <p class="em-9"><span class="date-bg"><?= $company->cases ?></span> - всего дел</p>
                                </div>
                                <div class="col-auto ml-auto">
                                    <a class="btn btn-sm btn-default px-2" href="<?= Url::to(['site/company', 'alias' => $company->alias]) ?>">Подробнее</a>
                                </div>
                            </div>
                        </div><!-- .cart-footer -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            <?php endforeach; ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<?php if ($news = $city->region->lastNews): ?>
    <section class="section">
        <div class="container">
            <h1 class="center">Актуальные новости по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h1>
        </div><!-- .container -->
    </section><!-- .section -->
    <section class="section bg">
    <div class="container">
        <div class="row">
            <?php foreach ($news as $newsItem): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-img-header">
                        <img class="cart-img" src="<?= $newsItem->thumb ?>">
                    </div>
                    <div class="cart-body">
                        <h4><?= StringHelper::truncate($newsItem->title, 100) ?></h4>
                        <p><?= StringHelper::truncate($newsItem->description, 160) ?></p>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted em-9"><?= date('d.m.Y', $newsItem->date) ?></p>
                            </div>
                            <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                <a class="btn btn-sm btn-default" href="<?= Url::to([
                                    'site/news-item',
                                    'alias' => $newsItem->alias,
                                    'id' => $newsItem->id,
                                ]) ?>">Читать</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <?php endforeach; ?>
        </div><!-- .row -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'novosti-po-bankrotstvu']) ?>">Все новости</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->
<?php endif; ?>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto mx-auto m-md-0">
                <div class="img-wrap-circle">
                    <img width="250" height="250" src="/img/bull.png">
                </div>
            </div><!-- .col -->
            <div class="col-12 col-md offset-md-1">
                <h2 class="center">Раскажи всё, что знаешь о банкростве физического лица, компании, юристах по банкроству!</h2>
                <div class="wall arrow-md">
                    <p>
                        Если при прохождении процедуры банкротства Ваши права были ущемлены, то всегда можно
                        оставить отзыв о компании, юристах и адвокатов на нашем сайте. Предупредите других людей о том,
                        что их ждет, если они обратятся в эту компанию по банкротству, которая ведет свою деятельность
                        с нарушениями законодательства.
                    </p>
                    <p>
                        Расскажите о Вашем опыте прохождения процедуры банкротства, о юристах по банкротству
                        физических лиц и или читайте отзывы об интересующих Вас компаниях!
                    </p>
                </div><!-- .wall -->
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'obratnaya-svyaz']) ?>">Написать в редакцию портала</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Отзывы людей прошедших процедуру банкротства в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="my-auto">
                            <h3>Желаете оставить отзыв о компании по банкротству?</h3>
                            <p>Поделитесь информацией о прохождении процедуры банкротства</p>
                        </div>
                    </div><!-- .cart-body -->
                    <a class="btn cart-full-btn">
                        <i class="i-plus cart-full-btn-i"></i>
                        Добавить отзыв
                    </a>
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p class="mt-auto">
                            На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p>
                            «Спасибо самой замечательной компании за про-
                            деланную работу! Мое дело в суде (А41-600/2019).
                            Специалисты очень грамотные, терпеливые, ве-
                            жливые. На будущее хочу посоветовать тем, кто
                            читает отзывы: я так боялась коллекторов и
                            звонков из банка, но ребята кинули мне ссылки
                            с видео на ютубе, там настолько подробно ...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                            <div class="col">
                                <p class="right em-9">Тараканова Наталья Юрьевна</p>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

        </div><!-- .row -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="">Читать все отзывы</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <h2 class="h1 center">Часто обсуждаемые компании по банкроству в&nbsp;г.&nbsp;<?= $city->name ?></h2>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <div class="my-auto">
                            <h3>Желаете оставить отзыв?</h3>
                            <p>Поделитесь информацией о компании, которая поможет определиться людям с выбором.</p>
                        </div>
                    </div><!-- .cart-body -->
                    <a class="btn cart-full-btn">
                        <i class="i-plus cart-full-btn-i"></i>
                        Добавить отзыв<br>о компании
                    </a>
                    <div >

                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <h3 class="center">2Лекс</h3>
                        <p>
                            «Не думал что меня когда-нибудь коснется эта
                            проблема. Когда брал потребительский кредит,
                            было все безоблачно. Платил исправно. Потом...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <h3 class="center">Витакон</h3>
                        <p>
                            «Не думал что меня когда-нибудь коснется эта
                            проблема. Когда брал потребительский кредит,
                            было все безоблачно. Платил исправно. Потом
                            в одночасье...развод с женой, потеря работы...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <h3 class="center">Смолин</h3>
                        <p>
                            «Не думал что меня когда-нибудь коснется эта
                            проблема. Когда брал потребительский кредит,
                            было все безоблачно. Платил исправно. Потом
                            в одночасье...развод с женой, потеря работы...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <h3 class="center">ДОЛГАМ.НЕТ</h3>
                        <p>
                            «Не думал что меня когда-нибудь коснется эта
                            проблема. Когда брал потребительский кредит,
                            было все безоблачно. Платил исправно. Потом
                            в одночасье...развод с женой, потеря работы...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <h3 class="center">МэйДэй</h3>
                        <p>
                            «Не думал что меня когда-нибудь коснется эта
                            проблема. Когда брал потребительский кредит,
                            было все безоблачно. Платил исправно. Потом
                            в одночасье...развод с женой, потеря работы...»
                        </p>
                        <div class="row align-items-end mt-auto">
                            <div class="col-auto">
                                <p>
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                    <img width="14" height="14" src="/img/star-a.svg">
                                </p>
                            </div><!-- .col -->
                        </div>
                    </div><!-- .cart-body -->
                    <div class="cart-footer">
                        <div class="d-flex no-gutters align-items-center">
                            <div class="col">
                                <p class="mutted">13:14 11.07.2020</p>
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-sm btn-default" href="">Читать отзыв</a>
                            </div>
                        </div>
                    </div><!-- .cart-footer -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="">Читать все отзывы</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->

<?php if ($materials = Material::lastMaterials()): ?>
<section class="section">
    <div class="container">
        <h2 class="h1 center">Полезные материалы по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
            <?php foreach ($materials as $material): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cart">
                        <div class="cart-img-header">
                            <img class="cart-img" src="<?= $material->thumb ?>">
                        </div>
                        <div class="cart-body">
                            <h4><?= StringHelper::truncate($material->title, 100) ?></h4>
                            <p><?= StringHelper::truncate($material->description, 100) ?></p>
                        </div><!-- .cart-body -->
                        <div class="cart-footer">
                            <div class="d-flex no-gutters align-items-center">
                                <div class="col">
                                    <p class="mutted"><?= date('d.m.Y', $material->created_at) ?></p>
                                </div>
                                <div class="col-auto col-sm-3 col-md-4 col-lg-5">
                                    <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
                                </div>
                            </div>
                        </div><!-- .cart-footer -->
                    </div><!-- .cart -->
                </div><!-- .col -->
            <?php endforeach; ?>
        </div><!-- .row -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="<?= Url::to(
                    ['site/index', 'view' => Material::ALIAS
                ]) ?>">Читать все материалы</a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->
<?php endif; ?>

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Проверьте свои долги, штрафы в режиме реального&nbsp;времени!</h2>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg order-lg-2 z-2">
                <h2 class="center">Жители г.&nbsp;<?= $city->name ?> могут бесплатно проверить долги у&nbsp;судебных приставов по фамилии прямо у нас на портале</h2>
                <div class="row">
                    <div class="col-12 col-xl-10 mx-auto">
                        <div class="wall arrow-lg">
                            <p>Вы можете в режиме онлайн проверить любое физическое или юридическое лицо на предмет просуженных задолженностей</p>
                        </div><!-- .wall -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">Проверить долги</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-lg-auto align-self-end order-lg-1 z-1">
                <img class="img-center" width="400" style="margin-bottom: -10px" src="/img/block-img-2.jpg">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<div class="block-divider bg"></div>