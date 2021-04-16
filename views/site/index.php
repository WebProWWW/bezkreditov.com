<?php

use app\helpers\Url;
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
        <h2 class="h1 center">Онлайн сервис подбора специалистов по банкротству в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body" style="height: 100%;">
                        <h3 class="em-13">Подбор юриста по банкротству</h3>
                        <div class="row no-gutters" style="height: 100%;">
                            <div class="col-12 col-sm">
                                <div class="d-flex flex-column" style="height: 100%; position: relative;">
                                    <p class="em-9">Удобный сервис подбора юриста по банкротству в вашем регионе. Быстро, бесплатно, надежно.</p>
                                    <p class="em-9 mt-auto mb-5">Больше 50 предложений от юридических компаний</p>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="percent-circle" style="width: 60px">
                                                <span data-circle-percent="95"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Количество<br>успешных&nbsp;дел</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="em-13 center" style="width: 60px">
                                                <i class="i-star primary"></i> 10
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0 my-4">
                                            <a class="btn-default" href="<?= Url::toView('servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits') ?>">Попробовать</a>
                                        </div>
                                    </div>
                                </div><!-- .d-flex -->
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-5 col-xl-6 align-self-end mx-auto">
                                <div class="px-5 px-sm-0">
                                    <img class="img-center" src="/img/w-img-1.jpg" style="margin-bottom: -3px; margin-top: -3px;">
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-lg-6 mb-4">
                <div class="cart">
                    <div class="cart-body" style="height: 100%;">
                        <h3 class="em-13">Подбор финансового управляющего</h3>
                        <div class="row no-gutters" style="height: 100%;">
                            <div class="col-12 col-sm">
                                <div class="d-flex flex-column" style="height: 100%; position: relative;">
                                    <p class="em-9">Удобный сервис подбора финансового управляющего в вашем регионе для ведения процедуры банкротства.</p>
                                    <p class="em-9 mt-auto mb-5">Больше 70 предложений от финансовых управляющих</p>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="percent-circle" style="width: 60px">
                                                <span data-circle-percent="93"></span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Количество<br>успешных&nbsp;дел</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="em-13 center" style="width: 60px">
                                                <i class="i-star primary"></i> 9.5
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p class="em-9">Рейтинг портала<br>«Без&nbsp;кредитов»</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto mx-auto mx-sm-0 my-4">
                                            <a class="btn-default" href="<?= Url::to(['site/arbitration-list']) ?>">Попробовать</a>
                                        </div>
                                    </div>
                                </div><!-- .d-flex -->
                            </div><!-- .col -->
                            <div class="col-12 col-sm-6 col-md-4 col-lg-5 col-xl-6 align-self-end mx-auto">
                                <div class="px-5 px-sm-0">
                                    <img class="img-center" src="/img/w-img-2.jpg" style="margin-bottom: -3px; margin-top: -3px;">
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Бесплатный онлайн тест на списание долгов от портала «Без&nbsp;Кредитов»</h2>
        <div class="cart">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-lg order-lg-2 z-2">
                        <div class="px-sm-3 pl-lg-0">
                            <h2 class="h2 fw-400 my-4">
                                <em>
                                    <span class="dialog">Смогу ли я списать свои долги через банкротство?</span>
                                    <span class="dialog">А долги все спишут или частично?</span>
                                </em>
                            </h2>
                            <div class="wall px-sm-5 mb-lg-4">
                                <h3 class="h2 center my-3">Хватит гадать пора действовать!</h3>
                                <p class="em-11 my-3">Пройдите бесплатный онлайн тест и получите предварительное решение о&nbsp;списании ваших долгов* и три шикарных <a data-fancybox href="#test-bonus">бонуса</a> от нас прямо на почту</p>
                                <div class="row justify-content-center my-3">
                                    <div class="col-auto">
                                        <a class="btn btn-default" data-fancybox href="#test">Пройти тест</a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .wall -->
                            <p class="my-4">*<small> По 127 Федеральному закону «О&nbsp;банкротстве» можно списать следующие долги: Кредиты и займы. Просрочки по кредитам. Кредитными картам. Административные штрафы, долги за коммунальные услуги. Задолженность и пени по налогам.</small></p>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-lg-5 align-self-end order-md-1 z-1">
                        <img class="img-center" width="277" style="margin-bottom: -3px" src="/img/block-img-5.jpg">
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Лучшие компании по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h2>
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">По количеству успешных дел</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">По количеству отзывов</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">По рейтингу</a>
            </div><!-- .col -->
        </div><!-- .row -->
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

        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu']) ?>">Все компании</a>
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->

<?php if ($news = $city->region->lastNews): ?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Актуальные новости по банкротству физических лиц в&nbsp;г.&nbsp;<?= $city->name ?></h1>
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">Сегодня</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Лучшее за неделю</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Самое обсуждаемое</a>
            </div><!-- .col -->
        </div><!-- .tab -->
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

<section class="section bg">
    <div class="container">
        <div class="cart p-xl-3">
            <div class="cart-body">
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
            </div>
        </div>
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


<section class="section" style="background: #97C7D1; overflow: hidden;" id="zapret_viezda_iz_rf">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-5 col-xl-6 align-self-center">
                <h2>Онлайн сервис: Проверка запрета на выезд&nbsp;из&nbsp;РФ</h2>
                <h3 class="fw-400">Как проверить запрет на выезд за границу:</h3>
                <div class="row">
                    <div class="col-12 col-xl-9">
                        <p>На сайте “Без кредитов” вы можете проверить запрет на выезд из страны. Для проверки необходимо указать фамилию, имя, дату рождения, паспортные данные.</p>
                        <p>База сайта обновляются каждый день и берет данные из базы ФССП, ФНС, ФМС, ФТС, МВД.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a class="btn-default" href="<?= Url::to(['site/index', 'view' => 'zapret-viezda-iz-rf']) ?>">Проверить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-md-7 col-xl-6 align-self-end">
                <img class="img-center" src="/img/img-3-1.jpg" style="margin-bottom: -13px">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->


<section class="section bg">
    <div class="container">

        <h2 class="h1 center">Часто обсуждаемые компании по банкроству в&nbsp;г.&nbsp;<?= $city->name ?></h2>

        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">Новые</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Обсуждаемые сегодня</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Топ за все время</a>
            </div><!-- .col -->
        </div><!-- .tab -->

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
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">Лучшее за неделю</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Выбор редакции</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Самое популярное</a>
            </div><!-- .col -->
        </div><!-- .tab -->
        <?= $this->render('-material-list', [ 'materials' => $materials ]) ?>
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
    <h2 class="h1 center">Проверьте свои долги, штрафы в режиме реального&nbsp;времени!</h2>
    <div class="container mb-4">
        <div class="cart">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 order-lg-2 z-2">
                        <div class="px-sm-3">
                            <h2 class="center my-4">Жители г.&nbsp;<?= $city->name ?> могут бесплатно проверить долги у&nbsp;судебных приставов по фамилии прямо у нас на портале</h2>
                            <div class="wall px-sm-5 mb-lg-4">
                                <p class="em-11 my-4">В режиме онлайн будут показаны задолженности по кредитам, штрафам ГИБДД, алиментам и другие исполнительные производства должника.</p>
                                <div class="row my-4">
                                    <div class="col-auto mx-auto">
                                        <a class="btn btn-default" href="<?= Url::to(['site/index', 'view' => 'uznat-svoi-dolgi']) ?>">Проверить долги</a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .wall -->
                        </div><!-- .px -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6 align-self-end order-lg-1 z-1">
                        <img class="img-center" width="400" style="margin-bottom: -3px" src="/img/block-img-2.jpg">
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1 center">Вопросы и ответы по банкротству физических лиц</h2>
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <a class="tab-ln active">Все</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Банкротство</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Коллекторы</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">127 ФЗ</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Кредит</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Ипотека</a>
            </div><!-- .col -->
            <div class="col-auto">
                <a class="tab-ln">Имущество</a>
            </div><!-- .col -->
        </div><!-- .tab -->
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                <a class="ihover" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">
                    <img class="ihover-img" src="/img/faq-th-1.jpg">
                    <div class="ihover-content">
                        <h3 class="em-11 fw-600">Могут ли уволить за банкротство или отказать в работе?</h3>
                        <p class="mt-auto">1 ответ</p>
                    </div>
                </a>
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                <a class="ihover" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">
                    <img class="ihover-img" src="/img/faq-th-2.jpg">
                    <div class="ihover-content">
                        <h3 class="em-11 fw-600">Может ли пенсионер или инвалид пройти банкротство, заберут...</h3>
                        <p class="mt-auto">3 ответа</p>
                    </div>
                </a>
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                <a class="ihover" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">
                    <img class="ihover-img" src="/img/faq-th-3.jpg">
                    <div class="ihover-content">
                        <h3 class="em-11 fw-600">Как правильно пройти банкротство?</h3>
                        <p class="mt-auto">6 ответ</p>
                    </div>
                </a>
            </div><!-- .col -->
            <div class="col-12 col-sm-6 col-lg-5 col-xl-3">
                <a class="ihover" href="<?= Url::to(['site/index', 'view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote']) ?>">
                    <img class="ihover-img" src="/img/faq-th-4.jpg">
                    <div class="ihover-content">
                        <h3 class="em-11 fw-600">Если мы с мужем оба должника, можно ли вместе обратиться...</h3>
                        <p class="mt-auto">2 ответа</p>
                    </div>
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->