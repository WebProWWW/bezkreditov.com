<?php

/**
 * @param $expression
 * @param bool $return
 * @return string
 */
function dump($expression, $return=true)
{
    if ($expression === null) $expression = 'NULL';
    if ($expression === true) $expression = 'TRUE';
    if ($expression === false) $expression = 'FALSE';
    $html = '<pre>'.print_r($expression, $return).'</pre>';
    if ($return) return $html;
    echo $html;
}
