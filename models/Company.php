<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "company_rate".
 *
 * @property int $company_rate_id
 * @property string|null $alias
 * @property string|null $name
 * @property string|null $address
 * @property string|null $website
 * @property string|null $source
 * @property int|null $cases
 * @property int|null $refusals
 * @property int|null $written_off
 * @property int|null $in_work
 * @property int|null $employers
 * @property int|null $year_of_foundation
 * @property string|null $logo
 * @property float|null $rate
 *
 * @property string|null $logoImg
 * @property int $percent
 * @property array $reviewsCountByRate
 *
 * @property CompanyPhone[] $phones
 * @property CompanyComment[] $comments
 */
class Company extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_rate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cases', 'refusals', 'written_off', 'in_work', 'employers', 'year_of_foundation'], 'integer'],
            [['rate'], 'number'],
            [['alias', 'name', 'address'], 'string', 'max' => 255],
            [['website', 'source', 'logo'], 'string', 'max' => 2048],
            [['alias'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_rate_id' => 'Company Rate ID',
            'alias' => 'Alias',
            'name' => 'Name',
            'address' => 'Address',
            'website' => 'Website',
            'source' => 'Source',
            'cases' => 'Cases',
            'refusals' => 'Refusals',
            'written_off' => 'Written Off',
            'in_work' => 'In Work',
            'employers' => 'Employers',
            'year_of_foundation' => 'Year Of Foundation',
            'logo' => 'Logo',
            'rate' => 'Rate',
        ];
    }

    /**
     * @return CompanyPhone[]|ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(CompanyPhone::class, ['company_rate_id' => 'company_rate_id']);
    }

    /**
     * Gets query for [[CompanyComments]].
     *
     * @return ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(CompanyComment::class, ['company_rate_id' => 'company_rate_id']);
    }

    /**
     * @return ActiveDataProvider
     */
    public static function dataProvider()
    {
        return new ActiveDataProvider([
            'query' => self::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'rate' => SORT_DESC
                ]
            ],
        ]);
    }

    /**
     * @param int $limit
     * @return Company[]
     */
    public static function findTop(int $limit = 6)
    {
        return self::find()
            ->orderBy(['rate' => SORT_DESC])
            ->limit($limit)
            ->all();
    }

    /**
     * @return string|null
     */
    public function getLogoImg()
    {
        if ($this->logo === null) return null;
        return '/img/company_logo/' . $this->logo;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
        $total = (int) $this->cases;
        $success = (int) $this->written_off;
        $percent = $success * 100 / $total;
        return floor($percent);
    }

    /**
     * @return array
     */
    public function getReviewsCountByRate()
    {
        $query = $this->getComments();
        return [
            $query->where(['<', 'rate', 1])->count(),
            $query->where(['<', 'rate', 2])->count(),
            $query->where(['<', 'rate', 3])->count(),
            $query->where(['<', 'rate', 4])->count(),
            $query->where(['<', 'rate', 5])->count(),
            $query->where(['<', 'rate', 6])->count(),
        ];
    }

    /**
     * @param string $alias
     * @return Company
     * @throws NotFoundHttpException
     */
    public static function findByAlias(string $alias='')
    {
        $item = self::findOne(['alias' => $alias]);
        if ($item === null) {
            throw new NotFoundHttpException();
        }
        return $item;
    }
}
