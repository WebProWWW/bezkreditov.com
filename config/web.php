<?php

use yii\helpers\ArrayHelper;

return ArrayHelper::merge([
    'components' => [
        'request' => [
            'cookieValidationKey' => 'YQZrWHI8giRkeAmrQ4ZvdIXvczvU_ijT',
            'parsers' => [ 'application/json' => 'yii\web\JsonParser' ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => '/<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/novosti-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/news-item',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/fssp-search',
                    'route' => 'site/fssp-search',
                    'suffix' => '.json',
                ],
                '' => 'site/index',
            ],
        ],
    ],
], require __DIR__ . '/dev.php');