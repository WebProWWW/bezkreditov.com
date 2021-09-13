<?php

use app\helpers\Url;
use app\models\Page;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $city app\models\City */
/* @var $page Page */
/* @var $nav Page[] */

$nav = [];
if ($page = ArrayHelper::getValue($this->params, 'page')) {
    $nav = $page->nav;
}

?>
<div class="main-nav justify-content-between">
    <?php foreach ($nav as $item): ?>
        <?php if ($item->childs): ?>

            <a class="main-nav-ln" data-dropdown="#main-nav-content-<?= $item->id ?>">
                <span class="nav-txt">
                    <?= $item->label ?>
                    <i class="i-ch-down em-7"></i>
                </span>
            </a>

            <div class="main-nav-content" id="main-nav-content-<?= $item->id ?>">
                <div class="row no-gutters">

                    <div class="col-3 pr-3">
                        <a class="logo logo-sm" href="<?= Url::home() ?>">
                            <span class="logo-txt"><?= $item->label ?></span>
                            <span class="logo-stxt em-8"><?= $item->title ?></span>
                        </a>
                        <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                            <span class="row no-gutters justify-content-center align-items-center">
                                <span class="col-auto em-20 mr-2"><i class="i-like"></i></span>
                                <span class="col-auto em-8">Полезные сервисы от<br>портала «Без кредитов»</span>
                            </span>
                        </a>
                    </div><!-- .col -->

                    <div class="col-9">
                        <div class="row no-gutters">
                            <?php foreach ($item->childs as $child): ?>

                                <?php $childUrl = Url::to(['site/index', 'alias' => $item->alias,  'category' => $child->alias]) ?>

                                <?php if ($child->menu_type === Page::MENU_TYPE_NEWLINE): ?>
                                    <div class="col-12"></div>
                                <?php endif; ?>

                                <?php if ($child->menu_type === Page::MENU_TYPE_LABEL): ?>
                                    <div class="col-12">
                                        <a class="nav-ln fw-600" href="<?= $childUrl ?>">
                                            <?= $child->label ?>
                                        </a>
                                    </div><!-- .col -->
                                <?php else: ?>
                                    <div class="col-4 pr-1">
                                        <a class="nav-ln nav-list" href="<?= $childUrl ?>">
                                            <span class="nav-txt"><?= $child->label ?></span>
                                        </a>
                                    </div><!-- .col -->
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </div><!-- .row -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .main-nav-content -->

        <?php else: ?>

            <a class="main-nav-ln" href="<?= Url::to([
                'site/index',
                'alias' => $item->alias
            ]) ?>">
                <?= $item->label ?>
            </a>

        <?php endif; ?>
    <?php endforeach; ?>
</div><!-- .main-nav -->

<?php /*
<div class="main-nav justify-content-between">
    <a class="main-nav-ln" data-dropdown="#main-nav-content-7">
        <span class="nav-txt">
            Финансы
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-7">
        <div class="row align-items-center">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Финансы</span>
                    <span class="logo-stxt">Вся полезная информация о финансировании</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <nav class="nav">

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Вводный курс</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Домашняя бухгалтерия</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Долги и кредиты</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Финансы и жилье</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Работа и зарплата</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Семья и деньги</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Права и обязанности</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Непредвиденные обстоятельства</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Обеспеченная старость</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Сохранить и приумножить</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Словарь финансовых терминов</span>
                    </a>
                    <a class="nav-ln nav-list col-3" href="javascript:;">
                        <span class="nav-txt">Вопрос? Ответ!</span>
                    </a>
                    <!-- ROW -->

                    <a class="nav-ln nav-list col-4" href="javascript:;">
                        <span class="nav-txt">Мнение эксперта</span>
                    </a>
                    <a class="nav-ln nav-list col" href="javascript:;">
                        <span class="nav-txt">Лайфхаки</span>
                    </a>
                    <!-- ROW -->

                </nav>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->

    <a class="main-nav-ln" data-dropdown="#main-nav-content-8">
        <span class="nav-txt">
            Еще
            <i class="i-ch-down em-7"></i>
        </span>
    </a>
    <div class="main-nav-content" id="main-nav-content-8">
        <div class="row">
            <div class="col-3">
                <a class="logo logo-sm" href="<?= Url::home() ?>">
                    <span class="logo-txt">Полезная информация</span>
                    <span class="logo-stxt">Вся полезная информация о финансах в одном месте</span>
                </a>
                <a class="btn-trsp" href="<?= Url::toView('poleznye-servisy') ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
            <div class="col">
                <div class="row">
                    <div class="col-4">
                        <p class="fw-600">Банки</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы валют ЦБ РФ</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы обмена валют</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Рейтинги банков</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Клиентский рейтинг</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Финансовые показатели</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Отзывы о банках</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <p class="fw-600">Банкротство</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы валют ЦБ РФ</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Курсы обмена валют</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Рейтинги банков</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Клиентский рейтинг</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Финансовые показатели</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Отзывы о банках</span>
                        </a>
                    </div><!-- .col -->
                    <div class="col-4">
                        <p class="fw-600">Статьи и новости</p>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Сравнения</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Бытовая аналитика</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Тест-драйвы</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Истории</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Советы</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Новости партнеров</span>
                        </a>
                        <a class="nav-ln nav-list" href="javascript:;">
                            <span class="nav-txt">Funny Money</span>
                        </a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .main-nav-content -->
</div><!-- .main-nav -->
*/ ?>