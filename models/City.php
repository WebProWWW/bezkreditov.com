<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $alias
 * @property string $name
 * @property int|null $region_code
 *
 * @property ActiveDataProvider $news
 * @property Region $region
 */
class City extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alias', 'name'], 'required'],
            [['region_code'], 'integer'],
            [['alias', 'name'], 'string', 'max' => 255],
            [['alias'], 'unique'],
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
            'alias' => 'Поддомен',
            'name' => 'Город',
            'region_code' => 'Регион',
        ];
    }

    private $_region;

    /**
     * @return ActiveQuery|Region
     */
    public function getRegion()
    {
        if ($this->_region === null) {
            $this->_region = $this->hasOne(Region::class, ['code' => 'region_code']);
        }
        return $this->_region;
    }

    /**
     * @return City[]
     */
    public static function allCities()
    {
        return Yii::$app->cache->getOrSet('app-all-cities', function () {
            return self::find()->all();
        }, 0);
    }
}
