<?php

use app\widgets\FormAjax;

/* @var $this yii\web\View */

?>
<div class="pb-3">
    <div class="cart">
        <?php $form = FormAjax::begin([
            'formName' => 'FormConsult',
            'action' => ['site/consult'],
        ]) ?>
            <div class="cart-body">
                <div class="row align-items-center no-gutters">
                    <div class="col-auto mr-3">
                        <div class="yur">
                            <img class="yur-img" src="/img/yur.jpg">
                        </div>
                    </div><!-- .col -->
                    <div class="col">
                        <p>
                            <strong>Задайте вопрос юристу по банкротству</strong>
                            <br>
                            и получите бесплатную консультацию в течении 5 минут.
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?= $form->inputText('name', null, 'Ваше Имя') ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?= $form->inputText('phone', null, 'Ваш номер телефона', '+7-999-999-99-99') ?>
                    </div>
                </div>
                <?= $form->textarea('message', null, 'Текст вашего вопроса') ?>
                <?= $form->successMessage('Мы получили ваш вопрос. В течении 5 минут наш юрист свяжется с Вами.') ?>
            </div><!-- .cart-body -->
            <div class="carg-body-bg">
                <p> Пример: При каких обстоятельствах гражданин должен сам подать заявление о своем банкротстве?</p>
            </div>
            <div class="cart-body">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-xl-3">
                        <?= $form->submit('Задать вопрос') ?>
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <p>
                            <strong>Быстро</strong>
                            <br>
                            Заполните форму и уже через 5 минут с вами свяжется юрист.
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 col-md">
                        <p>
                            <strong>Конфидениально</strong>
                            <br>
                            Все данные будут переданны по защищенному каналу
                        </p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .cart-body -->
        <?php FormAjax::end() ?>
    </div><!-- .cart -->
</div>