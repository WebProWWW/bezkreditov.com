<?php
return YII_ENV_DEV ? [
    'bootstrap' => ['gii', 'debug'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
] : [];