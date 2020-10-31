<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "fssp_department".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $postal_code
 * @property string|null $city
 * @property string|null $street
 * @property string|null $email
 * @property string|null $website
 * @property int|null $region_code
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $phone
 *
 * @property Region $region
 */
class Department extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fssp_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['postal_code', 'region_code'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['title', 'city', 'street', 'email', 'website'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 2048],
            [['region_code'], 'exist', 'skipOnError' => true, 'targetClass' => Region::class, 'targetAttribute' => ['region_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'postal_code' => 'Postal Code',
            'city' => 'City',
            'street' => 'Street',
            'email' => 'Email',
            'website' => 'Website',
            'region_code' => 'Region Code',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'phone' => 'Phone',
        ];
    }

    /**
     * @return Region|ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::class, ['code' => 'region_code']);
    }

    /**
     * @param string $lonLat
     * @return null|string
     */
    public function mapCache(string $lonLat='')
    {
        if ($lonLat === '') return null;
        $webroot = Yii::getAlias('@webroot');
        $name = 'cache' . md5($lonLat);
        $mapDest = $webroot . '/img/fssp/' . $name . '.png';
        if (!file_exists($mapDest)) {
            $mapSrc = ''
                .'https://static-maps.yandex.ru/1.x/?'
                .'ll='.$lonLat
                .'&pt='.$lonLat.',pm2rdm'
                .'&size=525,400'
                .'&z=16'
                .'&l=map'
            .'';
            copy($mapSrc, $mapDest);
        }
        if (!file_exists($mapDest)) return null;
        return '/img/fssp/' . $name . '.png';
    }
}
