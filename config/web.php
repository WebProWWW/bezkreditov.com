<?php

use yii\helpers\ArrayHelper;

return ArrayHelper::merge([
    'components' => [
        'request' => [
            'cookieValidationKey' => 'YQZrWHI8giRkeAmrQ4ZvdIXvczvU_ijT',
            'parsers' => [ 'application/json' => 'yii\web\JsonParser' ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    // РЕЙТИНГ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ
                    'pattern' => '/rejting-arbitrazhnyh-upravlyayushih-<page:[\w\-]+>',
                    'route' => 'site/arbitration-list',
                    'suffix' => '.html',
                ],
                [
                    // ПРОФИЛЬ УПРАВЛЯЮЩЕГО
                    'pattern' => '/rejting-arbitrazhnyh-upravlyayushih-<page:[\w\-]+>/profil-<id:[\w\-]+>',
                    'route' => 'site/arbitration',
                    'suffix' => '.html',
                ],
                [   // НОВОСТЬ
                    'pattern' => '/novosti-po-bankrotstvu/<alias:[\w\-]+>-<id:[\w\-]+>',
                    'route' => 'site/news-item',
                    'suffix' => '.html',
                ],
                [   // ПОЛЕЗНЫЙ МАТЕРИАЛ
                    'pattern' => '/poleznye-materialy-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/material',
                    'suffix' => '.html',
                ],
                [   // ЗАКОН О БАНКРОТСТВЕ
                    'pattern' => '/zakon-o-bankrotstve/<alias:[\w\-]+>',
                    'route' => 'site/law',
                    'suffix' => '.html',
                ],
                [   // РЕЙТИНГ КОМПАНИИ
                    'pattern' => '/rejting-kompanij-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/company',
                    'suffix' => '.html',
                ],
                [   // КОРНЕВЫЕ СТРАНИЦЫ
                    'pattern' => '/<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                // JSON
                [
                    'pattern' => '/callback',
                    'route' => 'site/callback',
                    'suffix' => '.json',
                ],
                [   // ПОИСК ДОЛГОВ ФССП
                    'pattern' => '/fssp-search',
                    'route' => 'site/fssp-search',
                    'suffix' => '.json',
                ],
                [   // ПРОЙТИ ТЕСТ
                    'pattern' => '/send-test',
                    'route' => 'site/send-test',
                    'suffix' => '.json',
                ],
                [   // ЗАДАТЬ ВОПРОС ЮРИСТУ
                    'pattern' => '/consult',
                    'route' => 'site/consult',
                    'suffix' => '.json',
                ],
                [   // ОБРАТНАЯ СВЯЗЬ
                    'pattern' => '/contact',
                    'route' => 'site/contact',
                    'suffix' => '.json',
                ],
                [   // FAQ ЗАДАТЬ ВОПРОС
                    'pattern' => '/send-faq',
                    'route' => 'site/send-faq',
                    'suffix' => '.json',
                ],
                /**
                 * ПОЛЬЗОВАТЕЛЬ
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
                [   // ВЫЙТИ
                    'pattern' => '/logout',
                    'route' => 'site/logout',
                ],
                [   // ВХОД
                    'pattern' => '/login',
                    'route' => 'site/login',
                    'suffix' => '.json',
                ],
                [   // РЕГИСТРАЦИЯ
                    'pattern' => '/register',
                    'route' => 'site/register',
                    'suffix' => '.json',
                ],
                [   // АКТИВАЦИЯ (EMAIL)
                    'pattern' => '/activate',
                    'route' => 'site/activate',
                ],
                /**
                 * АДМИНИСТРАТОР
                 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
                [   // LIST
                    'pattern' => '/admin/<model:[\w\-]+>',
                    'route' => 'admin/list',
                    'suffix' => '.json',
                ],
                [   // UPDATE
                    'pattern' => '/admin/<model:[\w\-]+>/update/<id:[\w\-]+>',
                    'route' => 'admin/update',
                    'suffix' => '.json',
                ],
                [   // CREATE
                    'pattern' => '/admin/<model:[\w\-]+>/create',
                    'route' => 'admin/create',
                    'suffix' => '.json',
                ],
                [   // REMOVE
                    'pattern' => '/admin/<model:[\w\-]+>/remove/<id:[\w\-]+>',
                    'route' => 'admin/remove',
                    'suffix' => '.json',
                ],
                '' => 'site/index',
            ],
        ],
    ],
], require __DIR__ . '/dev.php');