<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news_region".
 *
 * @property int $region_code
 * @property int $news_id
 *
 * @property News $news
 * @property Region $regionCode
 */
class NewsRegion extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_code', 'news_id'], 'required'],
            [['region_code', 'news_id'], 'integer'],
            [['region_code', 'news_id'], 'unique', 'targetAttribute' => ['region_code', 'news_id']],
            [['region_code'], 'exist', 'skipOnError' => true, 'targetClass' => Region::class, 'targetAttribute' => ['region_code' => 'code']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::class, 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * @return News|ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::class, ['id' => 'news_id']);
    }

    /**
     * @return Region|ActiveQuery
     */
    public function getRegionCode()
    {
        return $this->hasOne(Region::class, ['code' => 'region_code']);
    }
}
