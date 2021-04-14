<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "arbitration_managers_cpo".
 *
 * @property int $cpo_id
 * @property string|null $cpo_name
 *
 * @property Arbitration[] $managers
 */
class ArbitrationCpo extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitration_managers_cpo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpo_name'], 'string', 'max' => 2048],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cpo_id' => 'Cpo ID',
            'cpo_name' => 'Cpo Name',
        ];
    }

    /**
     * @return yii\db\ActiveQuery
     */
    public function getManagers()
    {
        return $this->hasMany(Arbitration::class, ['spo_id' => 'cpo_id']);
    }

    /**
     * @return ArbitrationCpo[]
     */
    public static function findAllCpo()
    {
        $cpo = Yii::$app->cache->get('all-arbitration-cpo');
        if ($cpo === false) {
            $cpo = self::find()
                ->orderBy(['cpo_name' => SORT_ASC])
                ->all();
            Yii::$app->cache->set('all-arbitration-cpo', $cpo, 3600 * 24 * 365);
        }
        return $cpo;
    }
}
