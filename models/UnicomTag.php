<?php
namespace app\models;

use app\helpers\StringHelper;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Class UnicomTag
 * @package app\models
 *
 * @property int $id
 * @property string $title
 * @property string $displayLocation
 * @property UnicomAnchor[] $anchors
 *
 */
class UnicomTag extends BaseObject
{
    public $data;

    private $_anchors;

    private function val(string $key, $default=null)
    {
        return ArrayHelper::getValue($this->data, $key, $default);
    }

    private function str(string $key, $default='')
    {
        $val = ArrayHelper::getValue($this->data, $key, $default);
        return StringHelper::replaceUnicom($val);
    }

    public function getId() { return $this->val('id'); }
    public function getTitle() { return $this->str('title', ''); }
    public function getDisplayLocation() { return $this->val('display_location'); }
    public function getAnchors() {
        if ($this->_anchors === null) {
            $anchors = $this->val('ancors', []);
            ArrayHelper::multisort($anchors, 'weight');
            $this->_anchors = [];
            foreach ($anchors as $anchor) {
                $this->_anchors[] = new UnicomAnchor(['data' => $anchor]);
            }
        }
        return $this->_anchors;
    }
}