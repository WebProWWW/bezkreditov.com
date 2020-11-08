<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
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
 * @property string|null $content
 * @property int $view_count
 * @property int $viewCount
 *
 * @property string $readTime
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

    /**
     * @inheritDoc
     */
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
            [['description', 'content'], 'string'],
            [['alias', 'title', 'img'], 'string', 'max' => 255],
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
            'content' => 'Content',
        ];
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
     * @param int $w
     * @param int $h
     * @return string|null
     */
    public function cropImg(int $w, int $h)
    {
        $webroot = Yii::getAlias('@webroot');
        $src = $webroot . $this->img;
        if ($this->img === null or !file_exists($src)) return null;
        $name = StringHelper::basename($src);
        $dirname = StringHelper::dirname($src);
        $dest = $dirname . '/th-' . $w . '-' . $h. '-' . $name;
        if (!file_exists($dest)) {
            Image::thumbnail($src, $w, $h)->save($dest);
        }
        if (!file_exists($dest)) return null;
        return str_replace($webroot, '', $dest);
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
     * @param int $limit
     * @return Material[]
     */
    public static function lastMaterials(int $limit = 3)
    {
        return self::find()
            ->orderBy(['created_at' => SORT_DESC])
            ->limit($limit)
            ->all();
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

    /**
     * @return Material[]
     */
    public function getLastMaterials()
    {
        return self::find()
            ->where(['!=', 'id', $this->id])
            ->limit(3)
            ->orderBy(['created_at' => SORT_DESC])
            ->all();
    }

    /**
     * @return string
     */
    public function getReadTime()
    {
        $wordCount = (int) str_word_count($this->content);
        $wordCount = ceil($wordCount / 60);
        if ($wordCount < 1) $wordCount = 1;
        return "{$wordCount} мин.";

    }

    public function getViewCount()
    {
        $count = (float) $this->view_count;
        if ($count >= 1000000000) return round($count / 1000000000, 1) . 'G';
        if ($count >= 1000000) return round($count / 10000000, 1) . 'M';
        if ($count >= 1000) return round($count / 1000, 1) . 'K';
        return $count;
    }

}
