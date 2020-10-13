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
 * @property News[] $news
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
            [['alias', 'name'], 'string', 'max' => 255],
            [['alias'], 'unique'],
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
}
