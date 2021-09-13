<?php
namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use Yii;

/**
 *
 * @property int $id
 * @property string $class
 * @property int|null $page_id
 * @property string $title
 * @property int $active
 * @property int $order
 *
 * @property $model
 * @property Page $page
 */
class Block extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class'], 'required'],
            [['page_id', 'active', 'order'], 'integer'],
            [['class', 'title'], 'string', 'max' => 255],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::class, 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class' => 'Class',
            'page_id' => 'Page ID',
        ];
    }

    /**
     * Gets query for [[Page]].
     *
     * @return yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::class, ['id' => 'page_id']);
    }

    public function getModel()
    {
        return $this->hasOne($this->class, ['block_id' => 'id']);
    }
}
