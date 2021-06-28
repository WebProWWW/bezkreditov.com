<?php

use app\assets\MainAsset;
use app\helpers\Url;
use yii\web\View;

/* @var $this View */

$this->title = 'Дебетовые карты';
$this->params['description'] = 'На Без кредитов можно узнать где оформить дебетовую карту, так как здесь собраны лучшие банковские карты, на которые можно подать заявку в два клика онлайн. Сравните условия дебетовых карт и подберите наиболее выгодное предложение!';
//$this->params['breadcrumbs'] = ['Дебетовые карты'];

// $jsFile = '/js/vue-app-partner.min.js?v=001&rnd='.Yii::$app->security->generateRandomString(5);
$jsFile = '/js/vue-app-partner.min.js?v=003';
$this->registerJsFile($jsFile, [
    'depends' => MainAsset::class,
]);

?>

<div class="vue-app-partner"></div>