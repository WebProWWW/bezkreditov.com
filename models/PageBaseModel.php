<?php
namespace app\models;

use yii\base\BaseObject;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * @property Page $page
 * @property string $view
 */
abstract class PageBaseModel extends BaseObject
{

    protected $page;

    public function __construct($page, $config = [])
    {
        $this->page = $page;
        parent::__construct($config);
    }

    abstract function getView();
}