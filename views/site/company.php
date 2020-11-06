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
        'label' => 'Рейтинг компаний по банкротству',
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
            <div class="col-12 col-lg mx-auto">
                <img class="klogo" src="<?= $model->logoImg ?>">
                <p><?= $model->address ?></p>
                <p class="em-15">
                    <?php foreach ($model->phones as $phone): ?>
                        <a class="ln-black-primary" href="tel:<?= $phone->phone ?>"><?= $phone->phone ?></a>
                        <br>
                    <?php endforeach; ?>
                </p>
                <p><a href="<?= $model->website ?>" target="_blank">Веб-сайт</a></p>
                <a class="btn btn-default" href="">Обратный звонок</a>
            </div><!-- .col -->

            <div class="col-12 d-lg-none"><span class="divider-h"></span></div>
            <div class="d-none d-lg-block px-xl-4"><span class="divider-v"></span></div>

            <div class="col-12 col-sm col-lg mx-auto">
                <h3 class="h2 center">Дела по банкротству</h3>
                <p><span class="em-16"><?= $model->cases ?></span> - всего дел</p>
                <p><span class="em-16"><?= $model->written_off ?></span> - списание долгов</p>
                <p><span class="em-16"><?= $model->in_work ?></span> - в работе</p>
                <p><span class="em-16"><?= $model->refusals ?></span> - отказ в списании</p>
                <div class="percent">
                    <span class="percent-value" data-percent="<?= $model->percent ?>"></span>
                    <span class="percent-txt"><?= $model->percent ?>%</span>
                </div>
            </div><!-- .col -->

            <div class="col-12 d-sm-none"><span class="divider-h"></span></div>
            <div class="d-none d-sm-block px-xl-4"><span class="divider-v"></span></div>

            <div class="col-12 col-sm-auto mx-auto">
                <h3 class="h2 center">Отзывы</h3>
                <?php foreach ($model->reviewsCountByRate as $enabledStars => $countByRate): ?>
                    <div class="d-flex align-items-center">
                        <div class="mr-4 mb-2 em-13">
                            <?php for ($star=1; $star <= 5; $star++ ): ?>
                                <?php $isMuted = $enabledStars < $star;  ?>
                                <i class="i-star <?= $isMuted ? 'mutted' : 'green' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="mb-2"><span class="em-16"><?= $countByRate ?></span></p>
                    </div>
                <?php endforeach; ?>
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
    <h2 class="h1 center">Отзывы о компании <?= $model->name ?></h2>
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
    <div class="row justify-content-center my-3">
        <div class="col-auto">
            <?= LinkPager::widget([
                'pagination' => $comments->pagination,
            ]) ?>
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