<?php

return [
    'id' => 'app',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern' => '<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                '' => 'site/index',
            ],
        ],
    ],
];
