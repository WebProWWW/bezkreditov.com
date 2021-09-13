<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use Yii;

/**
 * This is the model class for table "unicom_offer".
 *
 * @property int $id
 * @property int $offer_id
 * @property string|null $name
 * @property string|null $logo
 * @property string|null $mobile_logo
 * @property string|null $description
 * @property string|null $offer_description
 * @property string|null $form_description
 * @property string|null $about_company
 * @property string|null $created
 * @property string|null $loan_type
 * @property string|null $traffic_type
 * @property int $min_loan_amount
 * @property int $max_loan_amount
 * @property int $min_loan_term
 * @property int $max_loan_term
 * @property int $min_age
 * @property int $max_age
 * @property int $min_score
 * @property int $max_score
 *
 * @property UnicomCondition[] $conditions
 */
class UnicomOffer extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unicom_offer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['offer_id'], 'required'],
            [['id', 'offer_id', 'min_loan_amount', 'max_loan_amount', 'min_loan_term', 'max_loan_term', 'min_age', 'max_age', 'min_score', 'max_score'], 'integer'],
            [['description', 'offer_description', 'form_description', 'about_company', 'min_loan_amount_label', 'max_loan_amount_label', 'min_loan_term_label', 'max_loan_term_label', 'min_age_label', 'max_age_label', 'min_score_label', 'max_score_label'], 'string'],
            [['name', 'logo', 'mobile_logo', 'created', 'loan_type', 'traffic_type', 'min_loan_amount_label', 'max_loan_amount_label', 'min_loan_term_label', 'max_loan_term_label', 'min_age_label', 'max_age_label', 'min_score_label', 'max_score_label'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'offer_id' => 'Offer ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'mobile_logo' => 'Mobile Logo',
            'description' => 'Description',
            'offer_description' => 'Offer Description',
            'form_description' => 'Form Description',
            'about_company' => 'About Company',
            'created' => 'Created',
            'loan_type' => 'Loan Type',
            'traffic_type' => 'Traffic Type',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getConditions()
    {
        return $this->hasMany(UnicomCondition::class, ['offer_id' => 'id']);
    }
}
