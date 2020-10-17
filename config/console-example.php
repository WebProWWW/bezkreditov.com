<?php
use yii\helpers\ArrayHelper;

return ArrayHelper::merge([
    'controllerNamespace' => 'app\commands',
], require __DIR__ . '/dev.php');