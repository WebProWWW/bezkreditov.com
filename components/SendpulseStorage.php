<?php

namespace app\components;

use Yii;
use yii\base\Exception;
use yii\helpers\FileHelper;
use Sendpulse\RestApi\Storage\FileStorage;

/**
 * Class SendpulseStorage
 * @package app\components
 */
class SendpulseStorage extends FileStorage
{
    public function __construct()
    {
        $dir = Yii::getAlias('@runtime').'/sendpulse';
        if (!is_dir($dir)) {
            try { FileHelper::createDirectory($dir, 0775, false); }
            catch (Exception $e) { $dir = ''; }
        }
        if ($dir !== '') $dir = $dir . '/';
        parent::__construct($dir);
    }
}