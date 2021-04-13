<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arbitration_managers_cases".
 *
 * @property int $case_id
 * @property int|null $manager_id
 * @property string|null $case_number
 *
 * @property ArbitrationManagers $manager
 */
class ArbitrationCase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitration_managers_cases';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id'], 'integer'],
            [['case_number'], 'string', 'max' => 255],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArbitrationManagers::className(), 'targetAttribute' => ['manager_id' => 'manager_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'case_id' => 'Case ID',
            'manager_id' => 'Manager ID',
            'case_number' => 'Case Number',
        ];
    }

    /**
     * Gets query for [[Manager]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(ArbitrationManagers::className(), ['manager_id' => 'manager_id']);
    }
}
