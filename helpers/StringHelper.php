<?php
namespace app\helpers;

use yii\helpers\StringHelper as YiiStringHelper;
use Yii;

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

    public static function replaceUnicom(string $string)
    {
        $string = str_replace('«Юником24»', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('&laquo;Юником24&raquo;', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('Юником24', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('«Юником 24»', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('&laquo;Юником 24&raquo;', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('Юником 24', '«Без&nbsp;кредитов»', $string);
        $string = str_replace('%current_date%', Yii::$app->formatter->asDate('now'), $string);
        $string = str_replace('%month%', self::currentMonth(), $string);
        $string = str_replace('%year%', Yii::$app->formatter->asDate('now', 'Y'), $string);
        $string = str_replace('%offer_rate_start%', 'от&nbsp;0%', $string);
        $string = str_replace('%offer_rate_end%', 'до&nbsp;20%', $string);
        $string = str_replace('%offer_sum_start%', 'от&nbsp;0&nbsp;рублей', $string);
        $string = str_replace('%offer_sum_end%', 'до&nbsp;3&nbsp;000&nbsp;000&nbsp;рублей', $string);
        $string = str_replace('%offer_time_start%', 'от&nbsp;1&nbsp;месяца', $string);
        $string = str_replace('%offer_time_end%', 'до&nbsp;72&nbsp;месяцев', $string);
        return $string;
    }

    public static function currentMonth()
    {
        $n = (int) date('n');
        $nArr = [1,2,3,4,5,6,7,8,9,10,11,12];
        $monthArr = ['название','январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
        return str_replace($nArr, $monthArr, $n);
    }
}