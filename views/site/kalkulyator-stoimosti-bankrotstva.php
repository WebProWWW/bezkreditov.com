<?php

use app\helpers\Url;
use app\models\Company;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = 'Калькулятор стоимости банкротства';

$this->params['description'] = 'Удобный калькулятор для расчета стоимости банкротства по России.';

$this->params['breadcrumbs'] = [
    'Калькулятор стоимости банкротства',
];

//$companyDataProvider = Company::dataProvider();

?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Калькулятор стоимости банкротства</h1>
        <p class="center">Удобный калькулятор для расчета стоимости банкротства по России.</p>

        <div class="mb-4">
            <div class="cart">
                <div class="cart-body">
                    <!-- VUE-APP-COST-CALCULATOR -->
                    <div class="js-vue-cost-calculator"></div>
                    <!-- / VUE-APP-COST-CALCULATOR -->
                </div><!-- .cart-body -->
            </div><!-- .cart -->
        </div><!-- .mb-4 -->

        <h2 class="h1 center">Предварительный расчет</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p class="center mt-auto">Предварительнася стоимость банкротства под ключ составит</p>
                        <p class="center fw-600 em-13">104 999 рублей</p>
                        <div class="row mt-auto">
                            <div class="col-12 mx-auto">
                                <div class="btn-default"><i class="i-download"></i> Сохранить расчет</div>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p class="center fw-600 em-13 mt-auto">10 999 рублей в месяц!</p>
                        <p class="center">Ваше банкротство в рассрочку на 12 месяцев</p>
                        <div class="row mt-auto">
                            <div class="col-12 mx-auto">
                                <div class="btn-default">Получить консультацию</div>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="cart">
                    <div class="cart-body">
                        <p class="center mt-auto">Хочу получить индивидуальную бесплатную консультацию юриста по банкротству</p>
                        <div class="row mt-auto">
                            <div class="col-12 mx-auto">
                                <div class="btn-default">Получить консультацию</div>
                            </div>
                        </div>
                    </div><!-- .cart-body -->
                </div><!-- .cart -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section -->

<?php /*

<section class="section">
    <div class="container">
        <h2 class="h1 center">Проверенные юристы по банкротству в г. Москва</h2>

        <div class="list">
            <div class="d-none d-xl-block">
                <div class="row bg-eo border-header-xl">
                    <div class="col-5">
                        <p class="fw-600 em-9">Название компании</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Успешных дел</p>
                    </div><!-- .col -->
                    <div class="col-3 center">
                        <p class="fw-600 em-9">Текущие дела</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Год основания</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Отзывов</p>
                    </div><!-- .col -->
                    <div class="col-1 center">
                        <p class="fw-600 em-9">Рейтинг</p>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
*/ ?>
            <?php /* foreach ($companyDataProvider->models as $company): ?>
                <a class="list-item" href="<?= Url::to(['site/company', 'alias' => $company->alias]) ?>">
                    <div class="col-12 col-xl-5 mx-auto mx-sm-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto mr-3">
                                <img class="klogo" width="60" src="<?= $company->logoImg ?>">
                            </div>
                            <div class="col">
                                <p class="mb-1 fw-600"><?= $company->name ?></p>
                                <p class="em-8"><?= $company->address ?></p>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-6 col-md-auto col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Успешных дел</p>
                        <div class="percent-circle">
                            <span data-circle-percent="<?= $company->percent ?>"></span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-6 col-md-4 col-xl-3 mx-auto">
                        <p class="fw-600 em-9 center d-xl-none">Текущие дела</p>
                        <p class="em-9">
                            <?= $company->cases ? $company->cases . ' - всего дел<br>' : '' ?>
                            <?= $company->written_off ? $company->written_off . ' - списание долгов<br>' : '' ?>
                            <?= $company->in_work ? $company->in_work . ' - в работе<br>' : '' ?>
                            <?= $company->in_work ? $company->refusals . ' - отказ в списании' : '' ?>
                        </p>
                    </div><!-- .col -->
                    <div class="col-12 d-md-none"><span class="divider-dark"></span></div>
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Год основания</p>
                        <p><?= $company->year_of_foundation ?> г.</p>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Отзывов</p>
                        <p><i class="i-mgs-a"></i> <?= $company->getComments()->count() ?></p>
                    </div><!-- .col -->
                    <div class="col-auto col-sm-4 col-md col-xl-1 mx-auto center">
                        <p class="fw-600 em-9 d-xl-none">Рейтинг</p>
                        <p class="em-16"><i class="i-star primary"></i> <?= $company->rate ?></p>
                    </div><!-- .col -->
                </a>
            <?php endforeach; */ ?>
<?php /*
        </div><!-- .list -->
    </div><!-- .container -->
</section>

 */ ?>