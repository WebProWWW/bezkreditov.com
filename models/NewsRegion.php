<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news_region".
 *
 * @property int $region_code
 * @property int $news_id
 *
 * @property News $news
 * @property Region $regionCode
 */
class NewsRegion extends \yii\db\ActiveRecord
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
            [['region_code'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_code' => 'code']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_code' => 'Region Code',
            'news_id' => 'News ID',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }

    /**
     * Gets query for [[RegionCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegionCode()
    {
        return $this->hasOne(Region::className(), ['code' => 'region_code']);
    }
}
