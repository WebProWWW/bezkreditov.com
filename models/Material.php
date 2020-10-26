<?php

namespace app\models;

use Yii;
use yii\caching\FileCache;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\helpers\StringHelper;
use yii\imagine\Image;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string $alias
 * @property string $title
 * @property string|null $description
 * @property string|null $img
 *
 * @property MaterialContent[] $contents
 *
 * @property string $thumb
 * @property Material[] $lastMaterials
 */
class Material extends ActiveRecord
{
    const TITLE = 'Полезные материалы по банкротству';
    const ALIAS = 'poleznye-materialy-po-bankrotstvu';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [ TimestampBehavior::class ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['alias', 'title'], 'required'],
            [['alias', 'title', 'description', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'alias' => 'Alias',
            'title' => 'Title',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[MaterialContents]].
     *
     * @return yii\db\ActiveQuery
     */
    public function getContents()
    {
        return $this->hasMany(MaterialContent::class, ['material_id' => 'id']);
    }

    /**
     * @return string|null
     */
    public function getThumb()
    {
        $webroot = Yii::getAlias('@webroot');
        $img = $webroot . $this->img;
        if ($this->img === null or !file_exists($img)) return null;
        $name = StringHelper::basename($img);
        $dirname = StringHelper::dirname($img);
        $thumb = $dirname . '/thumb-' . $name;
        if (!file_exists($thumb)) {
            Image::thumbnail($img, 500, 400)->save($thumb);
        }
        return str_replace($webroot, '', $thumb);
    }

    /**
     * @return ActiveDataProvider
     */
    public static function dataProvider()
    {
        return new ActiveDataProvider([
            'query' => self::find(),
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC
                ]
            ],
        ]);
    }

    /**
     * @param string $alias
     * @return Material
     * @throws NotFoundHttpException
     */
    public static function findByAlias(string $alias = '')
    {
        $model = self::findOne(['alias' => $alias]);
        if ($model === null) {
            throw new NotFoundHttpException();
        }
        return $model;
    }

    public static function title(City $city=null)
    {
        if ($city === null) self::TITLE;
        return self::TITLE . ' в г. ' . $city->name;
    }

    public static function titleHtml(City $city=null)
    {
        if ($city === null) self::TITLE;
        return self::TITLE . ' в&nbsp;г.&nbsp;' . $city->name;
    }

    public function getLastMaterials()
    {
        return self::find()
            ->where(['!=', 'id', $this->id])
            ->limit(3)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
    }

}
