<?php

use yii\web\Application;
use yii\helpers\ArrayHelper;


// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../config/bootstrap.php';

(new Application(ArrayHelper::merge(
    require __DIR__ . '/../config/common-local.php',
    require __DIR__ . '/../config/web-local.php'
)))->run();
