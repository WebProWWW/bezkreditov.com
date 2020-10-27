<?php

namespace app\commands;

use Yii;
use app\models\News;
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
        News::updateColumns();
        echo "news after parser command OK\n";
        return ExitCode::OK;
    }
}