<?php
namespace app\models;

use yii\helpers\ArrayHelper;
use yii\base\BaseObject;
use Yii;

/**
 * Class UnicomReview
 * @package app\models
 *
 * @property int $id
 * @property string $name
 * @property int $rating
 * @property string $text
 * @property string $created
 * @property UnicomOffer $offer
 * @property UnicomMfi $mfi
 * @property int $userId
 * @property string $phoneNumber
 *
 */
class UnicomReview extends BaseObject
{
    public $data;

    private $_offer;
    private $_mfi;

    private function val($key, $default = null)
    {
        return ArrayHelper::getValue($this->data, $key, $default);
    }

    private function date($key)
    {
        $val = ArrayHelper::getValue($this->data, $key, '');
        return Yii::$app->formatter->asDate($val);
    }

    public function getId() { return $this->val('id'); }
    public function getName() { return $this->val('name'); }
    public function getRating() { return $this->val('rating'); }
    public function getText() { return $this->val('text'); }
    public function getCreated() { return $this->date('created'); }
    public function getUserId() { return $this->val('user_id'); }
    public function getPhoneNumber() { return $this->val('phone_number'); }
    public function getOffer()
    {
        if ($this->_offer === null) {
            $this->_offer = new UnicomOffer(['data' => $this->val('offer')]);
        }
        return $this->_offer;
    }
    public function getMfi()
    {
        if ($this->_mfi === null) {
            $this->_mfi = new UnicomMfi(['data' => $this->val('mfi')]);
        }
        return $this->_mfi;
    }

}