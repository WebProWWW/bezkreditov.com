<?php

use app\widgets\FormAjax;

/* @var $this yii\web\View */

?>
<div class="mb-4">
    <div class="cart">
        <div class="cart-body">
            <?php $form = FormAjax::begin([
                'formName' => 'Faq',
                'action' => ['site/send-faq'],
                'success' => '<strong>Мы получили ваш вопрос.</strong><br>В течении 5 минут мы отправим ответ на Ваш Email',
            ]) ?>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <?= $form->inputText('name', 'Ваше имя <span class="red">*</span>') ?>
                    </div><!-- .col -->
                    <div class="col-12 col-lg-4">
                        <?= $form->inputText('email', 'Ваш Email <span class="red">*</span>') ?>
                    </div><!-- .col -->
                    <div class="col-12 col-lg-4">
                        <?= $form->inputText('phone', 'Телефон <span class="red">*</span>', null, '+7-999-999-99-99') ?>
                    </div><!-- .col -->
                </div><!-- .row -->
                <?= $form->textarea('text', 'Ваш вопрос <span class="red">*</span>') ?>
                <div class="row">
                    <div class="col-12 col-md order-md-2">
                        <?= $form->inputFile('userFile', 'Прекрипить файл к сообщению') ?>
                    </div><!-- .col -->
                    <div class="col-12 col-md-5 col-lg-4 col-xl-3 order-md-1">
                        <?= $form->submit('Отправить ваш вопрос') ?>
                    </div><!-- .col -->
                </div><!-- .row -->
            <?php FormAjax::end() ?>
        </div><!-- .cart-body -->
    </div><!-- .cart -->
</div>