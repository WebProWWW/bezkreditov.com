<?php

namespace app\helpers;

use yii\helpers\Url as YiiHelperUrl;
use Yii;

/**
 * Class Url
 * @package app\helpers
 */
class Url extends YiiHelperUrl
{
    /**
     * @param $name string
     * @return string
     */
    public static function toSubdomain($name='')
    {
        $name = ($name !== '') ? $name.'.' : $name;
        $domain = self::rootDomain();
        $http = Yii::$app->request->isSecureConnection ? 'https://' : 'http://';
        return $http . $name . $domain;
    }

    /**
     * @return string
     */
    public static function rootDomain()
    {
        $domain = Yii::$app->request->hostName;
        $domainArr = explode('.', $domain);
        if (count($domainArr) === 3) {
            $domain = str_replace($domainArr[0].'.', '', $domain);
        }
        return $domain;
    }

    /**
     * @return string
     */
    public static function subdomain()
    {
        $domain = Yii::$app->request->hostName;
        $domainArr = explode('.', $domain);
        if (count($domainArr) === 3) {
            return $domainArr[0];
        }
        return '';
    }
}