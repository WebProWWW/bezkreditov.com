<?php

use app\helpers\Url;

?>
<section class="section" style="background: #97C7D1; overflow: hidden;" id="zapret_viezda_iz_rf">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-5 col-xl-6 align-self-center">
                <h2>Онлайн сервис: Проверка запрета на выезд&nbsp;из&nbsp;РФ</h2>
                <h3 class="fw-400">Как проверить запрет на выезд за границу:</h3>
                <div class="row">
                    <div class="col-12 col-xl-9">
                        <p>На сайте “Без кредитов” вы можете проверить запрет на выезд из страны. Для проверки необходимо указать фамилию, имя, дату рождения, паспортные данные.</p>
                        <p>База сайта обновляются каждый день и берет данные из базы ФССП, ФНС, ФМС, ФТС, МВД.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a class="btn-default" href="<?= Url::to(['site/index', 'view' => 'zapret-viezda-iz-rf']) ?>">Проверить</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-12 col-md-7 col-xl-6 align-self-end">
                <img class="img-center" src="/img/img-3-1.jpg" style="margin-bottom: -13px">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->