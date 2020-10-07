<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex($view='index')
    {
        return $this->render($view);
    }
}