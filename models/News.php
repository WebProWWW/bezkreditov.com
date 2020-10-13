<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "demo_news".
 *
 * @property int $id ID
 * @property int|null $city_id Город
 * @property string|null $date Дата
 * @property string|null $title Заголовок
 * @property string|null $alias Псевдоним url
 * @property string|null $image Изображение
 * @property string|null $description Описание
 * @property string|null $content Содержимое
 *
 * @property City $city
 *
 * @property News[] $lastNews
 */
class News extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'demo_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id'], 'integer'],
            [['content'], 'string'],
            [['date', 'title', 'alias', 'image', 'description'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::class, 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'City ID',
            'date' => 'Date',
            'title' => 'Title',
            'alias' => 'Alias',
            'image' => 'Image',
            'description' => 'Description',
            'content' => 'Content',
        ];
    }

    /**
     * @param string $alias
     * @return News
     * @throws NotFoundHttpException
     */
    public static function findByAlias(string $alias)
    {
        $item = self::findOne(['alias' => $alias]);
        if ($item === null) {
            throw new NotFoundHttpException();
        }
        return $item;
    }

    /**
     * @return News[]
     */
    public function getLastNews()
    {
        return self::find()
            ->where(['!=', 'id', $this->id])
            ->limit(6)
            ->all();
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::class, ['id' => 'city_id']);
    }
}
