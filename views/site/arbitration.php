<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;

use app\models\Material;
use app\widgets\FormAjax;
use app\models\Region;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $arbitration app\models\Arbitration */
/* @var $page int|string */

$this->title = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['description'] = 'Рейтинг арбитражных управляющих по банкротству физических лиц г. '.$city->name;

$this->params['breadcrumbs'] = [
    [
        'url' => ['site/arbitration-list', 'page' => $page],
        'label' => 'Рейтинг арбитражных управляющих г.&nbsp;' . $city->name,
    ],
    $arbitration->fullname
];

?>
<section class="section bg">
    <div class="container">

        <div class="row">
            <div class="col-12 col-xl order-2 order-xl-1">
                <a class="btn-default" data-fancybox data-src="#callback" href="javascript:;">Заказать банкротство</a>
                <a class="btn-trsp">Оставить отзыв</a>
                <a class="btn-trsp" href="<?= Url::to(['site/arbitration-list', 'page' => $page]) ?>">К списку управляющих</a>
                <h2>Полезные статьи</h2>
                <div class="row">
                    <?php foreach (Material::lastMaterials(6) as $material): ?>
                        <div class="col-12 col-lg-6 col-xl-12">
                            <div class="mb-4">
                                <div class="cart">
                                    <div class="cart-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <img class="img" width="100" src="<?= $material->cropImg(300, 320) ?>">
                                            </div>
                                            <div class="col">
                                                <h4 class="em-9 mb-2"><?= StringHelper::truncate($material->title, 60) ?></h4>
                                                <div class="wall-divider mb-2"></div>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <p class="mutted em-9"><?= date('d.m.Y', $material->created_at) ?></p>
                                                    </div>
                                                    <div class="col-auto ml-auto">
                                                        <a class="btn btn-sm btn-default" href="<?= Url::to(['site/material', 'alias' => $material->alias]) ?>">Читать</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .cart-body -->
                                </div><!-- .cart -->
                            </div><!-- cart wrapper -->
                        </div><!-- .col -->
                    <?php endforeach; ?>
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-xl-8 order-1 order-xl-2">

                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <img class="img-b" width="200" height="200" src="/img/arbitration_managers_photo/<?= $arbitration->image ?>">
                                </div><!-- .col -->
                                <div class="col-12 col-md">
                                    <p class="fw-600">
                                        <span class="d-block em-13"><?= $arbitration->fullname ?></span>
                                        <span class="d-block">Арбитражный управляющий</span>
                                    </p>
                                    <p class="row no-gutters align-items-end">
                                        <span class="col-12 col-md-6 fw-600">Народный рейтинг:</span>
                                        <span class="col-12 col-md-6 em-15">
                                            <?php $stars = (float) $arbitration->people_rate ?>
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <i class="i-star <?= ($stars >= $i) ? 'yellow' : 'mutted' ?>"></i>
                                            <?php endfor; ?>
                                        </span>
                                    </p>
                                    <p class="row no-gutters align-items-end">
                                        <span class="col-12 col-md-6 fw-600 mb-1">Профессиональный рейтинг:</span>
                                        <span class="col-12 col-md-6 fw-600">
                                            <span class="em-15"><?= $arbitration->professional_rate ?></span>
                                            <a class="col-auto ln-black-primary fw-400" data-fancybox data-src="#arbitration-rate-info" href="javascript:;">Что&nbsp;это&nbsp;значит?</a>
                                        </span>
                                    </p>
                                    <p><?= $arbitration->CPO ?></p>
                                    <p class="fw-600">Сведения о арбитражном управляющем:</p>
                                    <p class="row no-gutters bg" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Регион:</span>
                                        <span class="col-12 col-sm-6"><?= $arbitration->region_name ?></span>
                                    </p>
                                    <p class="row no-gutters" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Регистрационный номер:</span>
                                        <span class="col-12 col-sm-6"><?= $arbitration->registration_number ?></span>
                                    </p>
                                    <p class="row no-gutters bg align-items-center" style="margin: 0 -15px; padding: 10px 15px">
                                        <span class="col-12 col-sm-6">Телефон:</span>
                                        <span class="col-12 col-sm-6">
                                            <a class="btn-sm btn-default m-0" data-fancybox data-src="#callback" href="javascript:;">Перезвонить</a>
                                        </span>
                                    </p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Участие управляющего в делах по банкротству физических лиц</span></h3>
                            <p class="row no-gutters align-items-end">
                                <span class="col">Колличество дел по банкротству физических лиц с участием управляющего</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px"><?= $arbitration->bankrupt_cases ?></span>
                                </span>
                            </p>
                            <p class="row no-gutters align-items-end">
                                <span class="col">Количество дел по реструктуризации долгов с участием управляющего</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px"><?= $arbitration->restruct_cases ?></span>
                                </span>
                            </p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Дела по банкротству физических лиц, завершенные списанием долга</span></h3>
                            <div class="row">
                                <?php foreach ($arbitration->cases as $key => $case): ?>
                                    <?php if ($key === 8) break; ?>
                                    <div class="col-6 col-sm-4 col-md-3 py-1">
                                        <?= $case->case_number ?>
                                    </div>
                                <?php endforeach; ?>
                            </div><!-- .row -->
                            <div style="overflow: hidden; display: none" id="toggle-case">
                                <div class="row">
                                    <?php foreach ($arbitration->cases as $key => $case): ?>
                                        <?php if ($key > 7): ?>
                                            <div class="col-6 col-sm-4 col-md-3 py-1">
                                                <?= $case->case_number ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div><!-- .row -->
                            </div><!-- #toggle-case -->
                            <div class="row">
                                <div class="col-auto mx-auto my-3">
                                    <span class="ln-black-primary" data-toggle="#toggle-case">Показать еще</span>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Дела по банкротству физических лиц, из которых вышел этот управляющий:</span></h3>
                            <p class="row no-gutters align-items-center">
                                <span class="col">Отсутствуют</span>
                                <span class="col-auto">
                                    <span class="bg-primary em-13 fw-600 center" style="display: block; min-width: 80px; padding: 3px 8px">0</span>
                                </span>
                            </p>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
                <div class="mb-4">
                    <div class="cart">
                        <div class="cart-body">
                            <h3><span class="bb-primary pb-1">Отзывы о <?= $arbitration->fullname ?></span></h3>
                            <div class="bg-eo"></div>
                            <?php $comments = $arbitration->comments; ?>
                            <?php foreach ($comments as $comment): ?>
                                <div class="row align-items-center bg-eo pt-3">
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
                                                <p class="d-flex align-items-center">
                                                    <span class="d-block mr-3 mb-1">
                                                        <?php $stars = (float) $comment->rate ?>
                                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                                            <i class="i-star <?= ($stars >= $i) ? 'yellow' : 'mutted' ?>"></i>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span class="d-block">
                                                        <i class="i-date mr-2"></i> <?= date('d.m.Y', $comment->date) ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <p><?= $comment->text ?></p>
                                    </div>
                                </div><!-- .row -->
                            <?php endforeach; ?>
                        </div><!-- .cart-body -->
                    </div><!-- .cart -->
                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="mb-4">
            <div class="cart">
                <div class="cart-body">
                    <h2 class="center">Лидеры рейтинга арбитражных управляющих. <?= $arbitration->region_name ?></h2>
                    <div class="list list-md-border">

                        <div class="d-none d-lg-block">
                            <div class="row bg-eo border-header">
                                <div class="col">
                                    <p class="fw-600 em-9">Арбитражный управляющий</p>
                                </div><!-- .col -->
                                <div class="col-3 center">
                                    <p class="fw-600 em-9">Регион</p>
                                </div><!-- .col -->
                                <div class="col-2 center">
                                    <p class="fw-600 em-9">Рейтинг ПРОФ</p>
                                </div><!-- .col -->
                                <div class="col-3 center">
                                    <p class="fw-600 em-9">Народный рейтинг</p>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>

                        <?php foreach ($arbitration->regionLeaders as $leader): ?>
                            <a class="list-item" href="">
                                <div class="col-12 col-lg">
                                    <p class="fw-600"><?= $leader->fullname ?></p>
                                </div><!-- .col -->
                                <div class="col-12 col-lg-3">
                                    <p>
                                        <span class="fw-600 d-lg-none">Регион<br></span>
                                        <?= $leader->region_name ?>
                                    </p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-6 col-lg-2">
                                    <p class="lg-center">
                                        <span class="fw-600 d-lg-none">Рейтинг ПРОФ<br></span>
                                        <?= $leader->professional_rate ?>
                                    </p>
                                </div><!-- .col -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <p class="lg-center">
                                        <span class="fw-600 d-lg-none">Народный рейтинг<br></span>
                                        <span>
                                            <?php $stars = (float) $leader->people_rate ?>
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <i class="i-star <?= ($stars >= $i) ? 'yellow' : 'mutted' ?>"></i>
                                            <?php endfor; ?>
                                        </span>
                                    </p>
                                </div><!-- .col -->
                            </a>
                        <?php endforeach; ?>

                    </div><!-- .list -->

                    <div class="row">
                        <div class="col-auto mx-auto">
                            <a class="btn-default" href="<?= Url::to(['site/arbitration-list', 'page' => $page]) ?>">Показать весь рейтинг управляющих</a>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div>
    </div><!-- .container -->
</section><!-- .section -->

<div class="d-none">

<div class="modal-md" id="arbitration-rate-info">
    <p class="center fw-600">Что представляет собой данный рейтинг и чем он может быть полезен</p>
    <ol>
        <li><p>Рейтинг арбитражных управляющих преследует цель помощи гражданам России в новой сложной процедуре финансового оздоровления - банкротстве. Поскольку в процедуре обязательно участие третьего лица - арбитражного управляющего, перед которым банкрот полностью открыт и уязвим, мы даем возможность людям создать репутацию управляющим на новом рынке.</p></li>
        <li><p>Информация об авторах отзывов не раскрывается ни при каких условиях.</p></li>
        <li><p>Администрация сайта не несет ответственности за оставленные на сайте отзывы. Но мы рассматриваем жалобы на проблемные отзывы.</p></li>
    </ol>
    <p>Рейтинг, представленный на нашем сайте, предназначен всем гражданам и юридическим лицам, которые проходят или планируют пройти процедуру банкротства в соответствии с законом. В процедуре обязательно должен принимать участие арбитражный управляющий. В частности, для физического лица он будет финансовым управляющим. Выбор финансового управляющего - ответственный этап финансового оздоровления. Наше Общество призвано помочь Вам в выборе финансового управляющего и успешному прохождению процедуры финансового оздоровления(банкротства). </p>
    <p class="center fw-600">Наш рейтинг построен на следующих принципах</p>
    <ul>
        <li><p>Рейтинг нельзя купить. Коммерческие предложения всегда помечаются;</p></li>
        <li><p>Рейтинг учитывает максимально возможное число как объективных, так и субъективных факторов;</p></li>
        <li><p>Рейтинг учитывает только работу арбитражных управляющих в сфере банкротства физических лиц.</p></li>
    </ul>
</div><!-- .modal -->

</div><!-- .d-none -->