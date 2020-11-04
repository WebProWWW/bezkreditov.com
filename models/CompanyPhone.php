<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_phone".
 *
 * @property int $company_rate_id
 * @property int $phone_id
 * @property string $phone
 *
 * @property Company $companyRate
 */
class CompanyPhone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_phone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_rate_id'], 'required'],
            [['company_rate_id'], 'integer'],
            [['phone'], 'string', 'max' => 64],
            [['company_rate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_rate_id' => 'company_rate_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_rate_id' => 'Company Rate ID',
            'phone_id' => 'Phone ID',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyRate()
    {
        return $this->hasOne(Company::className(), ['company_rate_id' => 'company_rate_id']);
    }
}
