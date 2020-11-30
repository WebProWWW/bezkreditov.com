<?php

use app\models\Material;
use app\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->title = Material::title($city);
$titleHtml = Material::titleHtml($city);
$this->params['description'] = $this->title;
$this->params['breadcrumbs'] = [ $titleHtml ];
$dataProvider = Material::dataProvider();

?>
<section class="section bg">
    <div class="container">
        <h1 class="center"><?= $titleHtml ?></h1>

        <?= $this->render('-material-list', [
            'materials' => $dataProvider->models
        ]) ?>

        <div class="row justify-content-center my-3">
            <div class="col-auto">
                <?= LinkPager::widget([
                    'pagination' => $dataProvider->pagination,
                ]) ?>
            </div>
        </div>

        <?= $this->render('-form-consult') ?>

    </div><!-- .container -->
</section><!-- .section -->