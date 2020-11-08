<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\FormAjax;

/* @var $this yii\web\View */

$this->title = 'Обратная связь';

$this->params['description'] = $this->title;

$this->params['breadcrumbs'] = [
    'Обратная связь'
];

?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Обратная связь</h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section ">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="bg px-4 pt-3 px-sm-5 pt-sm-4 pb-sm-2">
                    <?php $form = FormAjax::begin([
                        'formName' => 'FormContact',
                        'action' => ['site/contact'],
                        'success' => '<strong>Мы получили ваше сообщение.</strong><br>В течении 5 минут мы ответим на Ваш Email.',
                    ]) ?>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <?= $form->inputText('name', 'Ваше имя <span class="red">*</span>') ?>
                            </div><!-- .col -->
                            <div class="col-12 col-md-6">
                                <?= $form->inputText('email', 'Ваш Email <span class="red">*</span>') ?>
                            </div><!-- .col -->
                        </div><!-- .row -->
                        <?= $form->inputText('subject', 'Тема <span class="red">*</span>') ?>
                        <?= $form->textarea('message', 'Ваше сообщение <span class="red">*</span>') ?>
                        <div class="row">
                            <div class="col-12 col-md order-md-2">
                                <?= $form->inputFile('userFile', 'Прекрипить файл к сообщению') ?>
                            </div><!-- .col -->
                            <div class="col-12 col-md-5 col-lg-4 order-md-1">
                                <?= $form->submit('Отправить сообщение') ?>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    <?php FormAjax::end() ?>
                </div><!-- .bg -->
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->