<?php

//(new \yii\web\Application())->language;

return [
    'id' => 'yii2-cms',
    'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=178.250.156.86;dbname=bezkreditov',
            'username' => 'public_root',
            'password' => 'ppbz4uXW',
            'charset' => 'utf8',
            // Schema cache options (for production environment)
            //'enableSchemaCache' => true,
            //'schemaCacheDuration' => 60,
            //'schemaCache' => 'cache',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

];