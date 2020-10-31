<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "region_codes".
 *
 * @property int $code
 * @property string $region_name
 *
 * @property Department $department
 * @property News[] $lastNews
 * @property ActiveDataProvider $news
 * @property NewsRegion[] $newsRegions
 */
class Region extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code'], 'integer'],
            [['region_name'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'region_name' => 'Region Name',
        ];
    }

    /**
     * @return Department|ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::class, ['region_code' => 'code']);
    }

    /**
     * @return ActiveDataProvider
     */
    public function getNews()
    {
        $query = $this->hasMany(News::class, ['id' => 'news_id'])
            ->viaTable('news_region', ['region_code' => 'code']);
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC
                ]
            ],
        ]);
    }

    public function getLastNews()
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->viaTable('news_region', ['region_code' => 'code'])
            ->orderBy(['date' => SORT_DESC])
            ->limit(3)
            ->all();
    }

    /**
     * @param int $currentNewsId
     * @return array|News[]
     */
    public function lastNews(int $currentNewsId)
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->viaTable('news_region', ['region_code' => 'code'])
            ->where(['!=', 'id', $currentNewsId])
            ->orderBy(['date' => SORT_DESC])
            ->limit(3)
            ->all();
    }

    /**
     * Gets query for [[NewsRegions]].
     *
     * @return ActiveQuery
     */
    public function getNewsRegions()
    {
        return $this->hasMany(NewsRegion::class, ['region_code' => 'code']);
    }

    /**
     * @return Region[]
     */
    public static function findAllRegions()
    {
        $regions = Yii::$app->cache->get('all-regions');
        if ($regions === false) {
            $regions = self::find()->all();
            Yii::$app->cache->set('all-regions', $regions, 3600 * 24 * 365);
        }
        return $regions;
    }
}
