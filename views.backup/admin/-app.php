<?php

use yii\web\View;
use app\dashboard\Assets;

/* @var $this View */

Assets::register($this);

$this->registerJsVar('appData', [
    'baseUrl' => '/admin',
    'logout' => '/admin/logout',
    'sidebar' => [
        'links' => [
            [
                'path' => '/material',
                'title' => 'Материалы',
                'icon' => 'article',
            ],
            [
                'path' => '/news',
                'title' => 'Новости',
                'icon' => 'article',
            ],
        ],
    ],
], View::POS_HEAD);

?>
<div id="app"></div>