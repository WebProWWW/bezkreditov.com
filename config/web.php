<?php

return [
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
                    'pattern' => '<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => 'novosti-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/news-item',
                    'suffix' => '.html',
                ],
                '' => 'site/index',
            ],
        ],
    ],
];
