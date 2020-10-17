<?php

namespace app\commands;

use app\models\Fssp;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * Class FsspController
 * @package app\commands
 */
class FsspController extends Controller
{
    public function actionDoTasks()
    {
        echo Fssp::doTasks() . "\n";
        return ExitCode::OK;
    }
}