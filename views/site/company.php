<?php

use yii\data\ActiveDataProvider;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $model app\models\Company */

$this->title = $model->name;

$this->params['description'] = 'Спасибо самой замечательной компании за проделанную работу! Мое дело в суде (А41-60610/2019). Специалисты очень грамотные, терпеливые, вежливые.';

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/index', 'view' => 'rejting-kompanij-po-bankrotstvu'],
        'label' => 'Рейтинг компаний по банкротству г.&nbsp;' . $city->name,
    ],
];

?>
<section class="section bg">
    <div class="container">
        <h1 class="center"><?= $this->title ?></h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm col-lg">
                <img class="klogo" src="<?= $model->logoImg ?>">
                <p><?= $model->address ?></p>
                <p class="em-13 fw-600">
                    <?php foreach ($model->phones as $phone): ?>
                        <a class="ln-black-primary" href="tel:<?= $phone->phone ?>"><?= $phone->phone ?></a>
                        <br>
                    <?php endforeach; ?>
                </p>
                <p><a href="<?= $model->website ?>" target="_blank">Веб-сайт</a></p>
                <div class="row">
                    <div class="col-auto">
                        <a class="btn-default" href="">Обратный звонок</a>
                    </div>
                </div>
            </div><!-- .col -->

            <div class="col-12 d-sm-none"><span class="divider-h"></span></div>
            <div class="d-none d-sm-block px-xl-4"><span class="divider-v"></span></div>

            <div class="col-12 col-sm col-lg mx-auto">
                <h3 class="center">Дела по банкротству</h3>
                <p class="d-flex align-items-center">
                    <span class="d-block em-13 fw-600 mr-2"><?= $model->cases ?></span>
                    <span class="mr-2">-</span>
                    <span class="d-block">всего дел по банкротству</span>
                </p>
                <p class="d-flex align-items-center">
                    <span class="d-block em-13 fw-600 mr-2"><?= $model->written_off ?></span>
                    <span class="mr-2">-</span>
                    <span class="d-block">количество успешных дел по банкротству</span>
                </p>
                <p class="d-flex align-items-center">
                    <span class="d-block em-13 fw-600 mr-2"><?= $model->in_work ?></span>
                    <span class="mr-2">-</span>
                    <span class="d-block">дел по банкротству в работе</span>
                </p>
                <p class="d-flex align-items-center">
                    <span class="d-block em-13 fw-600 mr-2"><?= $model->refusals ?></span>
                    <span class="mr-2">-</span>
                    <span class="d-block">отказ в списании долгов</span>
                </p>
                <div class="percent">
                    <?php $percent = $model->percent . '%' ?>
                    <span class="percent-value" style="width: <?= $percent ?>"></span>
                    <span class="percent-txt" style="left: <?= $percent ?>"><?= $percent ?></span>
                </div>
            </div><!-- .col -->

            <div class="col-12 d-lg-none"><span class="divider-h mt-3"></span></div>
            <div class="d-none d-lg-block px-xl-4"><span class="divider-v"></span></div>

            <div class="col-12 col-sm col-lg-auto mx-auto mb-2">
                <h3 class="center">Отзывы</h3>
                <p class="em-30 fw-600 center" style="line-height: 1"><?= $model->rate ?></p>
                <h3 class="center">Общий рейтинг</h3>
                <div class="row">
                    <div class="col-auto mx-auto">
                        <?php foreach ($model->reviewsCountByRate as $enabledStars => $countByRate): ?>
                            <?php if ($countByRate): ?>
                                <div class="d-flex align-items-center">
                                    <div class="mr-3 mb-1 em-11">
                                        <?php for ($star=1; $star <= 5; $star++ ): ?>
                                            <?php $isMuted = $enabledStars < $star;  ?>
                                            <i class="i-star <?= $isMuted ? 'mutted' : 'yellow' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="mb-1"><span class="em-13"><?= $countByRate ?></span></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->

            <div class="col-12 d-sm-none"><span class="divider-h"></span></div>
            <div class="d-none d-sm-block px-xl-4"><span class="divider-v"></span></div>

            <div class="col-12 col-sm col-lg-auto">
                <div class="center">
                    <h3>Цены на процедуру<br>банкротства</h3>
                    <p class="fw-600 my-5">
                        <span class="em-20 px-3 py-1 bg-primary">4&nbsp;999</span>
                        <br>
                        <span class="em-15">руб.</span>
                    </p>
                    <p><em>в рассрочку</em></p>
                </div><!-- .center -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-6 col-sm-auto">
                <p class="center">
                    Год основания
                    <br>
                    <strong class="em-18"><?= $model->year_of_foundation ?></strong>
                </p>
            </div><!-- .col -->
            <div class="col-6 col-sm-auto">
                <p class="center">
                    Сотрудников
                    <br>
                    <strong class="em-18"><?= $model->employers ?></strong>
                </p>
            </div><!-- .col -->
            <div class="col-6 col-sm-auto">
                <p class="center">
                    Отзывов
                    <br>
                    <strong class="em-18"><?= $model->getComments()->count() ?></strong>
                </p>
            </div><!-- .col -->
            <div class="col-6 col-sm-auto">
                <p class="center">
                    Успешных дел
                    <br>
                    <strong class="em-18"><?= $model->percent ?>%</strong>
                </p>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <h2 class="h1 center">Отзывы о компании <?= $model->name ?></h2>
        <div class="row no-gutters align-items-center justify-content-center">
            <div class="col-12 col-sm-auto mx-sm-2">
                <p class="center">Сортировать:</p>
            </div>
            <div class="col-auto mx-2">
                <a class="btn-sm btn-trsp">по дате</a>
            </div>
            <div class="col-auto mx-2">
                <a class="btn-sm btn-trsp active">по оценке</a>
            </div>
        </div>
    </div>
    <?php
        $comments = new ActiveDataProvider();
        $comments->query = $model->getComments();
        $comments->pagination->pageSize = 5;
        $comments->sort->defaultOrder = ['rate' => SORT_DESC]
    ?>
    <?php foreach ($comments->models as $comment): ?>
        <div class="bg-eo pt-3 pb-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-auto">
                        <div class="ava">
                            <img class="ava-img" width="90" height="90" src="/img/ava.svg">
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-lg">
                        <div class="row align-items-end">
                            <div class="col-12 col-md right md-left">
                                <p><strong><?= $comment->name ?></strong></p>
                            </div>
                            <div class="col-auto ml-auto">
                                <div class="d-flex align-items-center">
                                    <div class="mr-4 mb-3 em-12">
                                        <?php for ($star=1; $star <= 5; $star++ ): ?>
                                            <?php $isMuted = $comment->rate < $star;  ?>
                                            <i class="i-star <?= $isMuted ? 'mutted' : 'primary' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?= $comment->text ?></p>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
    <?php endforeach; ?>
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-auto">
                <?= LinkPager::widget([
                    'pagination' => $comments->pagination,
                ]) ?>
            </div>
        </div>
    </div>
</section><!-- .section -->

<?php /*

<section class="section">
    <div class="container">
        <h2 class="h1 center">Оставить отзыв о компании «БанкротКонсалт»</h2>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <div class="cart">
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-auto order-lg-3">
                        <div class="row align-items-center no-gutters">
                            <div class="col-12 col-sm-auto ml-auto mr-3">
                                <p>Ваша оценка компании:</p>
                            </div><!-- .col -->
                            <div class="col-auto">
                                <div class="rate">
                                    <!-- Обратный порядок звезд. 1 - звезда = 5 -->
                                    <!-- 5 --><a class="rate-star-ln" href=""><i class="i-star rate-star-i"></i></a>
                                    <!-- 4 --><a class="rate-star-ln" href=""><i class="i-star rate-star-i"></i></a>
                                    <!-- 3 --><a class="rate-star-ln" href=""><i class="i-star rate-star-i"></i></a>
                                    <!-- 2 --><a class="rate-star-ln" href=""><i class="i-star rate-star-i"></i></a>
                                    <!-- 1 --><a class="rate-star-ln" href=""><i class="i-star rate-star-i"></i></a>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                    <div class="col-12 col-md-6 col-lg order-lg-1">
                        <input class="input" type="text" placeholder="Имя">
                    </div><!-- .col -->
                    <div class="col-12 col-md-6 col-lg order-lg-2">
                        <input class="input" type="text" placeholder="Фамилия">
                    </div><!-- .col -->
                </div><!-- .row -->
                <textarea class="input" rows="5" placeholder="Ваш отзыв"></textarea>
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-xl-3">
                        <button class="btn btn-default">Оставить отзыв</button>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        </div><!-- .cart -->
        <div class="my-4"></div>
    </div><!-- .container -->
</section><!-- .section -->

 */ ?>