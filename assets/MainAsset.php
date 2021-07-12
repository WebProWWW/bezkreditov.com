<?php

namespace app\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap',
        '/css/main.depends.css?v=056',
        '/css/main.css?v=089',
    ];

    public $js = [
        '/js/main.depends.js?v=032',
        '/js/main.js?v=080',
    ];

    // public function init()
    // {
    //     $this->js = [
    //         '/js/main.depends.js?rnd='.time(),
    //         '/js/main.js?rnd='.time(),
    //     ];
    //     $this->css = [
    //         'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap',
    //         '/css/main.depends.css?rnd='.time(),
    //         '/css/main.css?rnd='.time(),
    //     ];
    //     parent::init();
    // }
}