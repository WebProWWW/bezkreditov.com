<?php

namespace app\models;

use Yii;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\db\Query;
use yii\helpers\ArrayHelper;
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
 * @property int|string|null|bool $commentsCount
 * @property ActiveDataProvider $commentsDataProvider
 */
class Company extends ActiveRecord
{
    private $_commentsCount;
    private $_commentsDataProvider;

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
     * @return ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(CompanyPhone::class, ['company_rate_id' => 'company_rate_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(CompanyComment::class, ['company_rate_id' => 'company_rate_id']);
    }

    /**
     * @param int|string $val
     */
    public function setCommentsCount($val)
    {
        $this->_commentsCount = (int) $val;
    }

    /**
     * @return int
     */
    public function getCommentsCount()
    {
        if ($this->isNewRecord) return 0;
        if ($this->_commentsCount === null) {
            $this->setCommentsCount($this->getComments()->count());
        }
        return $this->_commentsCount;
    }

    /**
     * @param ActiveDataProvider $dataProvider
     */
    public function setCommentsDataProvider(ActiveDataProvider $dataProvider)
    {
        $this->_commentsDataProvider = $dataProvider;
    }

    /**
     * @return ActiveDataProvider
     */
    public function getCommentsDataProvider()
    {
        if ($this->_commentsDataProvider === null) {
            $query = $this->getComments();
            $order = Yii::$app->request->get('cf', 'rate');
            $defaultOrder = [];
            if ($order === 'rate') $defaultOrder = ['rate' => SORT_DESC];
            if ($order === 'data') $defaultOrder = ['date' => SORT_DESC];
            $provider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 5,
                    'defaultPageSize' => 5,
                ],
                'sort' => [
                    'defaultOrder' => $defaultOrder
                ],
            ]);
            $this->setCommentsDataProvider($provider);
        }
        return $this->_commentsDataProvider;
    }

    /**
     * @return ActiveDataProvider
     * @deprecated
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
     * @param array $filter
     * @param int $pageSize
     * @return ActiveDataProvider
     */
    public static function search(array $filter = [], int $pageSize = 10)
    {
        $defaultOrder = [];
        $query = self::find();
        if ($searchName = ArrayHelper::getValue($filter, 'search', false)) {
            $query->andFilterWhere(['like', 'name', $searchName]);
        }
        $orderBy = ArrayHelper::getValue($filter, 'order', 'rate');
        if ($orderBy === 'work') $defaultOrder = ['written_off' => SORT_DESC];
        if ($orderBy === 'rate') $defaultOrder = ['rate' => SORT_DESC];
        if ($orderBy === 'comment') {
            $query
                ->select(['company_rate.*', 'COUNT(company_rate_comment.comment_id) AS commentsCount'])
                ->joinWith('comments')
                ->groupBy('company_rate.company_rate_id');
            $defaultOrder = ['commentsCount' => SORT_DESC];
        }
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $pageSize,
                'defaultPageSize' => $pageSize,
            ],
            'sort' => [
                'attributes' => [
                    'written_off',
                    'rate',
                    'commentsCount',
                ],
                'defaultOrder' => $defaultOrder,
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
            $query->where(['in', 'rate', [0, 0.5]])->count(),
            $query->where(['in', 'rate', [1, 1.5]])->count(),
            $query->where(['in', 'rate', [2, 2.5]])->count(),
            $query->where(['in', 'rate', [3, 3.5]])->count(),
            $query->where(['in', 'rate', [4, 4.5]])->count(),
            $query->where(['in', 'rate', [5]])->count(),
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
