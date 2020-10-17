<?php
return YII_ENV_DEV ? [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
] : [];