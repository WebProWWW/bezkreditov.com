<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use Throwable;


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

    /**
     * @return ActiveQuery|Region
     */
    public function getRegion()
    {
        return $this->hasOne(Region::class, ['code' => 'region_code']);
    }

    /**
     * @return City[]
     */
    public static function allCities()
    {
        try {
            return self::getDb()->cache(function () {
                return self::find()->all();
            });
        } catch (Throwable $e) {}
        return [];
    }
}
