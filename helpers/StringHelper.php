<?php

namespace app\helpers;

use yii\helpers\StringHelper as YiiStringHelper;

/**
 * Class StringHelper
 * @package app\helpers
 */
class StringHelper extends YiiStringHelper
{
    /**
     * @param string $string
     * @return string
     */
    public static function cyrToLat(string $string)
    {
        $cyr = ['№','Я', 'я', 'Ю', 'ю', 'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ', 'Ж', 'ж', 'А','а','Б','б','В','в','Г','г','Д','д','Е','е','Ё','ё','З','з','И','и','Й','й','К','к','Л','л','М','м','Н','н','О','о','П','п','Р','р','С','с','Т','т','У','у','Ф','ф','Х','х','Ц','ц','Ы','ы','Ь','ь','Ъ','ъ','Э','э'];
        $lat = ['n','Ya','ya','Yu','yu','Ch','ch','Sh','sh','Sh','sh','Zh','zh','A','a','B','b','V','v','G','g','D','d','E','e','E','e','Z','z','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','R','r','S','s','T','t','U','u','F','f','H','h','C','c','Y','y','' ,'' ,'' ,'' ,'E','e'];
        $out = str_replace($cyr, $lat, $string);
        $out = preg_replace('/_+$/m', '', $out);
        $out = preg_replace('/[\s_]/m', '-', $out);
        $out = preg_replace('/[\s~`!@#$%^&*()+={}|\'":;\/,.?№«»\[\]]/m', '', $out);
        $out = preg_replace('/[-]{2,}/im', '-', $out);
        $out = preg_replace('/\n/im', '', $out);
        $out = trim(trim($out), '-');
        return strtolower($out);
    }
}