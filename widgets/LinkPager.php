<?php

namespace app\widgets;

use yii\widgets\LinkPager as YiiPager;

class LinkPager extends YiiPager
{
    public $maxButtonCount = 5;
    public $prevPageLabel = '<i class="i-left"></i>';
    public $nextPageLabel = '<i class="i-right"></i>';
}