<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

/**
 *
 * @property int $id
 * @property string|null $file
 * @property int|null $block_id
 *
 * @property Block $block
 */
class BlockFile extends ActiveRecord
{
    public function getView()
    {
        return 'file/' . $this->file;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['block_id'], 'integer'],
            [['file'], 'string', 'max' => 255],
            [['block_id'], 'exist', 'skipOnError' => true, 'targetClass' => Block::class, 'targetAttribute' => ['block_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
            'block_id' => 'Block ID',
        ];
    }

    /**
     * Gets query for [[Block]].
     *
     * @return yii\db\ActiveQuery
     */
    public function getBlock()
    {
        return $this->hasOne(Block::className(), ['id' => 'block_id']);
    }
}
