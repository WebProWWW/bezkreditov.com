<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "unicom_condition".
 *
 * @property int $id
 * @property int $offer_id
 * @property string|null $label
 * @property string|null $value
 *
 * @property UnicomOffer $offer
 */
class UnicomCondition extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unicom_condition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'offer_id'], 'required'],
            [['id', 'offer_id'], 'integer'],
            [['label', 'value'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['offer_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnicomOffer::className(), 'targetAttribute' => ['offer_id' => 'id']],
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
            'label' => 'Label',
            'value' => 'Value',
        ];
    }

    /**
     * Gets query for [[Offer]].
     *
     * @return ActiveQuery
     */
    public function getOffer()
    {
        return $this->hasOne(UnicomOffer::class, ['id' => 'offer_id']);
    }
}
