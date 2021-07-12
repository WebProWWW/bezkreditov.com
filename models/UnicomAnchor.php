<?php
namespace app\models;

use app\helpers\StringHelper;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Class UnicomAnchor
 * @package app\models
 *
 * @property int $id
 * @property string $name
 * @property string $path
 * @property bool $isActive
 * @property int $weight
 * @property string $alias
 * @property string $pathFirst
 */
class UnicomAnchor extends BaseObject
{
    public $data;

    private function val($key, $default = null)
    {
        return ArrayHelper::getValue($this->data, $key, $default);
    }

    public function getId() { return $this->val('id'); }
    public function getName() { return $this->val('name'); }
    public function getPath() { return $this->val('path'); }
    public function getIsActive() { return $this->val('is_active'); }
    public function getWeight() { return $this->val('weight'); }
    public function getAlias() {
        $path = StringHelper::explode($this->path, '/');
        return ArrayHelper::getValue($path, '2', null);
    }

    public function getPathFirst()
    {
        $path = StringHelper::explode($this->path, '/');
        return ArrayHelper::getValue($path, '1', null);
    }

}