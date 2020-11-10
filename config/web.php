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
                [   // КОРНЕВЫЕ СТРАНИЦЫ
                    'pattern' => '/<view:[\w\-]+>',
                    'route' => 'site/index',
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
                // JSON
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
                '' => 'site/index',
            ],
        ],
    ],
], require __DIR__ . '/dev.php');