<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arbitration_managers_comments".
 *
 * @property int $comment_id
 * @property int|null $manager_id
 * @property string|null $name
 * @property int|null $rate
 * @property int|null $date
 * @property string|null $text
 *
 * @property Arbitration $manager
 */
class ArbitrationComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arbitration_managers_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manager_id', 'rate', 'date'], 'integer'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => Arbitration::class, 'targetAttribute' => ['manager_id' => 'manager_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'manager_id' => 'Manager ID',
            'name' => 'Name',
            'rate' => 'Rate',
            'date' => 'Date',
            'text' => 'Text',
        ];
    }

    /**
     * Gets query for [[Manager]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(Arbitration::class, ['manager_id' => 'manager_id']);
    }
}
