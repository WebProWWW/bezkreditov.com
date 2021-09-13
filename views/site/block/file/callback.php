<?php

use app\helpers\Url;

?>
<section class="section bg">
    <div class="container pb-3">
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