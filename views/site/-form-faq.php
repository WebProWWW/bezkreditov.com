<?php

/* @var $this yii\web\View */

?>
<div class="mb-4">
    <div class="cart">
        <div class="cart-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <label class="label">Ваше имя <span class="red">*</span></label>
                    <input class="input" type="text">
                </div><!-- .col -->
                <div class="col-12 col-md-6">
                    <label class="label">Ваш Email <span class="red">*</span></label>
                    <input class="input" type="text">
                </div><!-- .col -->
            </div><!-- .row -->

            <label class="label">Ваш вопрос <span class="red">*</span></label>
            <textarea class="input" rows="5"></textarea>

            <div class="row">
                <div class="col-12 col-md order-md-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="em-9 right">Прекрипить файл к сообщению</p>
                        </div>
                        <div class="col-auto">
                            <span class="btn-sm btn-default">Прекрипить</span>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-12 col-md-auto order-md-1">
                    <button class="btn btn-default">Отправить ваш вопрос</button>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .cart-body -->
    </div><!-- .cart -->
</div>