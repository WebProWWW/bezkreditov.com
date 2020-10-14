<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Class NewsController
 * @package app\commands
 */
class NewsController extends Controller
{
    public function actionAfterParser()
    {
        echo "news after parser command\n";
        return ExitCode::OK;
    }
}