<?php

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

                    <label class="label">Тема</label>
                    <input class="input" type="text">

                    <label class="label">Ваше сообщение <span class="red">*</span></label>
                    <textarea class="input" rows="5"></textarea>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-5">
                            <button class="btn btn-default">Отправить сообщение</button>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .bg -->
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->
</section><!-- .section -->