<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company_rate_comment".
 *
 * @property int $comment_id
 * @property int $company_rate_id
 * @property string|null $name
 * @property float|null $rate
 * @property string|null $text
 *
 * @property Company $companyRate
 */
class CompanyComment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company_rate_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_rate_id'], 'required'],
            [['company_rate_id'], 'integer'],
            [['rate'], 'number'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['company_rate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_rate_id' => 'company_rate_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'company_rate_id' => 'Company Rate ID',
            'name' => 'Name',
            'rate' => 'Rate',
            'text' => 'Text',
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
