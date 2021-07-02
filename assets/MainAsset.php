<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap',
        '/css/main.depends.css?v=053',
        '/css/main.css?v=088',
    ];

    public $js = [
        '/js/main.depends.js?v=031',
        '/js/main.js?v=076',
    ];

    public function init()
    {
//        $this->js = [
//            '/js/main.depends.js?v=030',
//            '/js/main.js?rnd='.time(),
//        ];
        parent::init();
    }
}