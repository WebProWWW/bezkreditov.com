<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "arbitration_managers".
 *
 * @property int $manager_id
 * @property string|null $fullname
 * @property float|null $professional_rate
 * @property int|null $people_rate
 * @property string|null $image
 * @property int|null $registration_number
 * @property int|null $restruct_cases
 * @property int|null $bankrupt_cases
 * @property string|null $region_name
 * @property string|null $CPO
 * @property string|null $source
 * @property int|null $spo_id
 * @property int|null $region_code
 *
 * @property ArbitrationCase[] $cases
 * @property Arbitration[] $regionLeaders
 * @property ArbitrationComments[] $comments
 * @property Region $region
 * @property ArbitrationCpo $spo
 */
class Arbitration extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitration_managers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['professional_rate'], 'number'],
            [['people_rate', 'registration_number', 'restruct_cases', 'bankrupt_cases', 'spo_id', 'region_code'], 'integer'],
            [['fullname', 'region_name'], 'string', 'max' => 255],
            [['image', 'CPO', 'source'], 'string', 'max' => 2048],
            //[['spo_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManagersCpo::className(), 'targetAttribute' => ['spo_id' => 'cpo_id']],
            [['region_code'], 'exist', 'skipOnError' => true, 'targetClass' => Region::class, 'targetAttribute' => ['region_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'fullname' => 'Fullname',
            'professional_rate' => 'Professional Rate',
            'people_rate' => 'People Rate',
            'image' => 'Image',
            'registration_number' => 'Registration Number',
            'restruct_cases' => 'Restruct Cases',
            'bankrupt_cases' => 'Bankrupt Cases',
            'region_name' => 'Region Name',
            'CPO' => 'Cpo',
            'source' => 'Source',
            'spo_id' => 'Spo ID',
            'region_code' => 'Region Code',
        ];
    }

    /**
     * @param string $id
     * @return Arbitration
     * @throws NotFoundHttpException
     */
    public static function findById(string $id)
    {
        $item = self::findOne(['manager_id' => $id]);
        if ($item === null) throw new NotFoundHttpException();
        return $item;
    }

    /**
     * @param int|string $currentRegionCode
     * @param array $filter
     * @return ActiveDataProvider
     */
    public static function search(array $filter, $currentRegionCode)
    {
        $regionCode = ArrayHelper::getValue($filter, 'regionCode', $currentRegionCode);
        $query = self::find();
        $query->andFilterWhere(['region_code' => $regionCode]);
        if ($spoId = ArrayHelper::getValue($filter, 'spoId', false)) {
            $query->andFilterWhere(['spo_id' => $spoId]);
        }
        if ($fullName = ArrayHelper::getValue($filter, 'fullName', false)) {
            $query->andFilterWhere(['like', 'fullname', $fullName]);
        }
        $defaultOrder = [];
        $orderBy = ArrayHelper::getValue($filter, 'orderBy', 'people');
        if ($orderBy === 'people') $defaultOrder = ['people_rate' => SORT_DESC,];
        if ($orderBy === 'prof') $defaultOrder = ['professional_rate' => SORT_DESC];
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 8,
                'defaultPageSize' => 8,
            ],
            'sort' => [
                'defaultOrder' => $defaultOrder,
            ],
        ]);
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getCases()
    {
        return $this->hasMany(ArbitrationCase::class, ['manager_id' => 'manager_id']);
    }

    /**
     * @return Arbitration[]
     */
    public function getRegionLeaders()
    {
        return self::find()->where(['region_code' => $this->region_code ])->limit(6)->all();
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this
            ->hasMany(ArbitrationComments::class, ['manager_id' => 'manager_id'])
            ->orderBy(['date' => SORT_DESC])
            ->limit(6);
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::class, ['code' => 'region_code']);
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getSpo()
    {
        return $this->hasOne(ArbitrationCpo::class, ['cpo_id' => 'spo_id']);
    }
}
