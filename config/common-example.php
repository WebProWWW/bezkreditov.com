<?php

return [
    'id' => 'yii2-cms',
    'charset' => 'utf-8',
    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'timeZone' => 'Europe/Moscow',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'formatter' => [
            'dateFormat' => 'dd.MM.Y',
            'timeFormat' => 'HH:mm',
            'datetimeFormat' => 'dd.MM.Y HH:mm',
        ],
        'authManager' => [
            'class' => 'app\components\AuthManager',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=dbname',
            'username' => 'username',
            'password' => 'password',
            'charset' => 'utf8',
            // Schema cache options (for production environment)
            //'enableSchemaCache' => true,
            //'schemaCacheDuration' => 60,
            //'schemaCache' => 'cache',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.host.host',
                'username' => 'username@username.com',
                'password' => 'password',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],

];