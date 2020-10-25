<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "fssp_region".
 *
 * @property int $id
 * @property int $code
 * @property string $name
 *
 * @property City[] $cities
 */
class FsspRegion extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fssp_region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::class, ['fssp_region_id' => 'id']);
    }

    public static function findAllRegions()
    {
        $regions = Yii::$app->cache->get('fssp-all-regions');
        if ($regions === false) {
            $regions = self::find()->all();
            Yii::$app->cache->set('fssp-all-regions', $regions, 3600 * 24 * 365);
        }
        return $regions;
    }
}
