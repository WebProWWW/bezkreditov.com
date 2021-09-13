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
                /*
                // РЕЙТИНГ КОМПАНИИ
                [
                    'pattern' => '/rejting-kompanij-po-bankrotstvu-<page:[\w\-]+>',
                    'route' => 'site/company-list',
                    'suffix' => '.html',
                ],
                // ПРОФИЛЬ КОМПАНИИ
                [
                    'pattern' => '/rejting-kompanij-po-bankrotstvu-<cpage:[\w\-]+>/<alias:[\w\-]+>',
                    'route' => 'site/company',
                    'suffix' => '.html',
                ],
                // РЕЙТИНГ АРБИТРАЖНЫХ УПРАВЛЯЮЩИХ
                [
                    'pattern' => '/rejting-arbitrazhnyh-upravlyayushih-<page:[\w\-]+>',
                    'route' => 'site/arbitration-list',
                    'suffix' => '.html',
                ],
                // ПРОФИЛЬ УПРАВЛЯЮЩЕГО
                [
                    'pattern' => '/rejting-arbitrazhnyh-upravlyayushih-<page:[\w\-]+>/profil-<id:[\w\-]+>',
                    'route' => 'site/arbitration',
                    'suffix' => '.html',
                ],
                // НОВОСТЬ
                [
                    'pattern' => '/novosti-po-bankrotstvu/<alias:[\w\-]+>-<id:[\w\-]+>',
                    'route' => 'site/news-item',
                    'suffix' => '.html',
                ],
                // ПОЛЕЗНЫЙ МАТЕРИАЛ
                [
                    'pattern' => '/poleznye-materialy-po-bankrotstvu/<alias:[\w\-]+>',
                    'route' => 'site/material',
                    'suffix' => '.html',
                ],
                // ЗАКОН О БАНКРОТСТВЕ
                [
                    'pattern' => '/zakon-o-bankrotstve/<alias:[\w\-]+>',
                    'route' => 'site/law',
                    'suffix' => '.html',
                ],

                [
                    'pattern' => '/rejting-chastnyh-yuristov',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'rejting-chastnyh-yuristov'],
                ],
                [
                    'pattern' => '/spisok-yuristov-po-bankrotstvu',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'spisok-yuristov-po-bankrotstvu'],
                ],
                [
                    'pattern' => '/servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'servis-personalnogo-podbora-yurista-po-bankrotstvu-fizicheskih-lits'],
                ],
                [
                    'pattern' => '/servis-personalnogo-podbora-yurista-po-bankrotstvu',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'servis-personalnogo-podbora-yurista-po-bankrotstvu'],
                ],
//                [
//                    'pattern' => '/obratnaya-svyaz',
//                    'route' => 'site/index',
//                    'suffix' => '.html',
//                    'defaults' => ['view' => 'obratnaya-svyaz'],
//                ],
                [
                    'pattern' => '/zapret-viezda-iz-rf',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'zapret-viezda-iz-rf'],
                ],
                [
                    'pattern' => '/poleznye-servisy',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'poleznye-servisy'],
                ],
                [
                    'pattern' => '/mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'mogut-li-uvolit-za-bankrotstvo-ili-otkazat-v-rabote'],
                ],
                [
                    'pattern' => '/osago-onlajn',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'osago-onlajn'],
                ],
                [
                    'pattern' => '/ufssp-rossii',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'ufssp-rossii'],
                ],
                [
                    'pattern' => '/vopros-otvet-po-bankrotstvu-fizicheskih-lic',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'vopros-otvet-po-bankrotstvu-fizicheskih-lic'],
                ],
                [
                    'pattern' => '/onlajn-konsultaciya-yurista-po-bankrotstvu',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'onlajn-konsultaciya-yurista-po-bankrotstvu'],
                ],
                [
                    'pattern' => '/poleznye-materialy-po-bankrotstvu',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'poleznye-materialy-po-bankrotstvu'],
                ],
                [
                    'pattern' => '/otzyvy-lyudej-proshedshih-proceduru-bankrotstva',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'otzyvy-lyudej-proshedshih-proceduru-bankrotstva'],
                ],
                [
                    'pattern' => '/slovar-bankrotnyh-terminov-i-finansovyh-ponyatij',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'slovar-bankrotnyh-terminov-i-finansovyh-ponyatij'],
                ],
                [
                    'pattern' => '/zakon-o-bankrotstve',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'zakon-o-bankrotstve'],
                ],
                [
                    'pattern' => '/novosti-po-bankrotstvu',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'novosti-po-bankrotstvu'],
                ],
                [
                    'pattern' => '/polnaya-kreditnaya-istoriya',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'polnaya-kreditnaya-istoriya'],
                ],
                [
                    'pattern' => '/zashita-ot-moshennikov',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'zashita-ot-moshennikov'],
                ],
                [
                    'pattern' => '/proverka-finansovogo-zdorovya',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'proverka-finansovogo-zdorovya'],
                ],
                [
                    'pattern' => '/podbor-kredita',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'podbor-kredita'],
                ],
                [
                    'pattern' => '/kreditnyj-kalkulyator',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'kreditnyj-kalkulyator'],
                ],
                [
                    'pattern' => '/bankrotstvo',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'bankrotstvo'],
                ],
                [
                    'pattern' => '/o-proekte',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'o-proekte'],
                ],
                [
                    'pattern' => '/uznat-svoi-dolgi',
                    'route' => 'site/index',
                    'suffix' => '.html',
                    'defaults' => ['view' => 'uznat-svoi-dolgi'],
                ],
                */
                // СТРАНИЦЫ
                [
                    'pattern' => '/<alias:[\w\-]+>/<category:[\w\-]+>-<page:\d+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/<alias:[\w\-]+>/<category:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/<alias:[\w\-]+>-<page:\d+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                [
                    'pattern' => '/<alias:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
//                // ОФФЕРЫ
//                [
//                    'pattern' => '/<loanAlias:[\w\-]+>/<alias:[\w\-]+>-<page:[\w\-]+>',
//                    'route' => 'site/offers',
//                    'suffix' => '.html',
//                ],
//                // ОФФЕРЫ / *
//                [
//                    'pattern' => '/<loanAlias:[\w\-]+>-<page:[\w\-]+>',
//                    'route' => 'site/offers',
//                    'suffix' => '.html',
//                ],
//                // ОТПРАВКА ОФФЕРА
//                [
//                    'pattern' => '/offer-send',
//                    'route' => 'site/offer-send',
//                    'suffix' => '.json',
//                ],
//                // ОТЗЫВ ОФФЕРА
//                [
//                    'pattern' => '/offer-review-<mfiId:[\w\-]+>',
//                    'route' => 'site/offer-review',
//                    'suffix' => '.json',
//                ],
//                // ОФФЕР JSON
//                [
//                    'pattern' => '/offer-<id:[\w\-]+>',
//                    'route' => 'site/offer',
//                    'suffix' => '.json',
//                ],
                // КОРНЕВЫЕ СТРАНИЦЫ
                [
                    'pattern' => '/<view:[\w\-]+>',
                    'route' => 'site/index',
                    'suffix' => '.html',
                ],
                // * * * * * * * * * * * * * * * * *
                // JSON
                // * * * * * * * * * * * * * * * * *
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