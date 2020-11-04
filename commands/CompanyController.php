<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\helpers\StringHelper;
use app\models\Company;

/**
 * Class CompanyController
 * @package app\commands
 */
class CompanyController extends Controller
{
    /**
     * translit name to alias
     */
    public function actionAlias()
    {
//        /* @var $company Company */
//        $companies = Company::find()->all();
//        foreach ($companies as $company) {
//            $alias = StringHelper::cyrToLat($company->name);
//            $company->updateAttributes(['alias' => $alias]);
//        }
        return ExitCode::OK;
    }
}