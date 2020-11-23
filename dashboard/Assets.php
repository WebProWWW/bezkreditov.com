<?php

namespace app\dashboard;

use Yii;
use yii\web\AssetBundle;
use yii\web\AssetManager;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use Symfony\Component\Dotenv\Dotenv;
use Exception;

/**
 * Class Assets
 * @package app\dashboard
 *
 * @property AssetManager $assetManager
 * @property string $assetName
 */
class Assets extends AssetBundle
{
    public $sourcePath = '@app/dashboard/dist';
    public $css = [
        ['https://fonts.gstatic.com', 'rel' => 'preconnect'],
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Material+Icons+Sharp',
         'css/main.css',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
         'js/chunk-vendors.js',
         'js/main.js',
    ];
    public $publishOptions = [
        'except' => ['/index.html'],
    ];
    private $_assetManager = null;
    private $_assetName = null;

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $assetPath = $this->assetManager->basePath . '/' . $this->assetName;
        if (file_exists($assetPath)) {
            $distTime = filectime(__DIR__ . '/dist');
            $assetTime = filectime($assetPath);
            if ($distTime > $assetTime) $this->clean();
        }
        $this->assetManager->hashCallback = function () { return $this->assetName; };
    }

    /**
     * @return AssetManager
     */
    public function getAssetManager()
    {
        if ($this->_assetManager === null) {
            $this->_assetManager = Yii::$app->assetManager;
        }
        return $this->_assetManager;
    }

    /**
     * @return string
     */
    public function getAssetName()
    {
        if ($this->_assetName === null) {
            $env = new Dotenv();
            $env->load(Yii::getAlias('@app/dashboard').'/.env');
            try {
                $version = ArrayHelper::getValue($_ENV, 'APP_VERSION', '0');
            } catch (Exception $e) {
                $version = '0';
            }
            $this->_assetName = 'admin-'.$version;
        }
        return $this->_assetName;
    }

    /**
     * Clean All Version
     */
    private function clean()
    {
        FileHelper::findDirectories($this->assetManager->basePath, [
            'recursive' => false,
            'filter' => function ($path) {
                $isAsset = FileHelper::filterPath($path, ['only' => ['/admin-*']]);
                if ($isAsset) FileHelper::removeDirectory($path);
                return false;
            },
        ]);
    }
}