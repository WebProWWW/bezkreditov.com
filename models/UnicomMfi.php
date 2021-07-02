<?php
namespace app\models;

use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Class UnicomMfi
 * @package app\models
 *
 * @property int $id
 * @property int $rating
 * @property string $certificateOfCb
 * @property string $orgType
 * @property string $picture
 * @property string $pictureMobile
 * @property string $slug
 * @property string $name
 *
 */
class UnicomMfi extends BaseObject
{
    public $data;

    private function val($key, $default = null)
    {
        return ArrayHelper::getValue($this->data, $key, $default);
    }

    public function getId() { return $this->val('id'); }
    public function getRating() { return $this->val('rating'); }
    public function getCertificateOfCb() { return $this->val('certificate_of_cb'); }
    public function getOrgType() { return $this->val('org_type'); }
    public function getPicture() { return $this->val('picture'); }
    public function getPictureMobile() { return $this->val('picture_mobile'); }
    public function getSlug() { return $this->val('slug'); }
    public function getName() { return $this->val('name'); }
}