<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $alias
 * @property string $name
 * @property int|null $fssp_region_id
 *
 * @property News[] $news
 * @property FsspRegion $fsspRegion
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
            [['fssp_region_id'], 'integer'],
            [['alias', 'name'], 'string', 'max' => 255],
            [['alias'], 'unique'],
            [['fssp_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => FsspRegion::class, 'targetAttribute' => ['fssp_region_id' => 'id']],
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
            'fssp_region_id' => 'Fssp Region ID',
        ];
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this
            ->hasMany(News::class, ['city_id' => 'id'])
            ->limit(6);
    }

    /**
     * Gets query for [[FsspRegion]].
     *
     * @return FsspRegion|null
     */
    public function getFsspRegion()
    {
        return $this->hasOne(FsspRegion::class, ['id' => 'fssp_region_id']);
    }
}
