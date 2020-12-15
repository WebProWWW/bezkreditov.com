<div class="row align-items-center d-none">
    <div class="col-12 col-sm-10 col-md-8 col-lg-4 mx-auto">
        <div class="row">
            <div class="col-auto mx-auto">
                <a class="logo" href="<?= Url::home() ?>">
                    <span class="logo-txt">Без кредитов</span>
                    <span class="logo-stxt">Помогаем избавиться от долгов</span>
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
        <p class="center mb-4 em-9">
            <span class="row justify-content-center no-gutters">
                <span class="col-12 col-sm-auto mr-2">
                    <span class="fw-600">Выберите свой город:</span>
                </span>
                <span class="col-12 col-sm-auto">
                    <a data-fancybox href="#cities"><?= $city->name ?></a>
                </span>
            </span>
        </p>
        <div class="row justify-content-center no-gutters">
            <div class="col-auto mr-3 d-lg-none">
                <div class="d-flex align-items-center">
                    <div class="toggle-btn" data-toggle="#header-nav">
                        <i class="i-bars toggle-i"></i>
                        <p class="toggle-txt">Меню</p>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a class="btn-trsp" href="<?= Url::to(['site/index', 'view' => 'poleznye-servisy']) ?>">
                    <span class="row no-gutters justify-content-center align-items-center">
                        <span class="col-auto em-24 mr-2"><i class="i-like"></i></span>
                        <span class="col-auto em-9">Полезные сервисы от<br>портала «Без кредитов»</span>
                    </span>
                </a>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .col -->
    <div class="col-12 col-lg">
        <?= $this->render('-nav', ['city' => $city, 'id' => 'header-nav']) ?>
    </div><!-- .col -->
</div><!-- .row -->