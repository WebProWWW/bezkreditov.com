<?php

namespace app\models;

use app\dashboard\Input;
use app\dashboard\ModelInterface;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\helpers\StringHelper;
use yii\imagine\Image;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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
class Material extends ActiveRecord implements ModelInterface
{
    const TITLE = 'Полезные материалы по банкротству';
    const ALIAS = 'poleznye-materialy-po-bankrotstvu';

    //public $imgUploaded;

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
            //[['imgUploaded'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
            'alias' => 'Псевдоним URL',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'img' => 'Изображение <small class="text-muted">900 x auto px</small>',
            'content' => 'Содержимое',
        ];
    }

    /**
     * @inheritDoc
     */
    public function beforeSave($insert)
    {
        if ($file = UploadedFile::getInstanceByName('imgUploaded')) {
            $webroot = Yii::getAlias('@webroot');
            $name = Yii::$app->security->generateRandomString(8);
            $url = '/img/material/' . $name . '.jpg';
            $path = $webroot . $url;
            $file->saveAs($path);
            Image::resize($path, 900, null, false, true)
                ->save($path, ['quality' => 80]);
            $this->img = $url;
        }
        if ($insert) {
            $this->view_count = 10;
        }
        return parent::beforeSave($insert);
    }

    /**
     * @inheritDoc
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $this->removeAllImages();
            return true;
        }
        return false;
    }

    /**
     * @return string|null
     */
    public function getThumb()
    {
        return $this->cropImg(500, 400);
    }

    /**
     * @param int $w
     * @param int $h
     * @param string $default
     * @return string|null
     */
    public function cropImg(int $w, int $h, string $default='/img/image.svg')
    {
        $webroot = Yii::getAlias('@webroot');
        $src = $webroot . $this->img;
        if ($this->img === null or $this->img === '' or !file_exists($src)) return $default;
        $name = StringHelper::basename($src);
        $dirname = StringHelper::dirname($src);
        $dest = $dirname . "/{$w}x{$h}-th-{$name}";
        if (!file_exists($dest)) Image::thumbnail($src, $w, $h)->save($dest);
        if (!file_exists($dest)) return $default;
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
     * @param int|string $sort
     * @return Material[]
     */
    public static function lastMaterials(int $limit = 3, $sort = SORT_DESC)
    {
        //->orderBy(['created_at' => SORT_DESC])
        $orderBy = [];
        if ($sort === SORT_DESC) $orderBy = ['created_at' => SORT_DESC];
        if ($sort === SORT_ASC) $orderBy = ['created_at' => SORT_ASC];
        if ($sort === 'rand') $orderBy = 'rand()';
        return self::find()
            ->orderBy($orderBy)
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

    /**
     * REMOVE THIS IMAGES
     */
    private function removeAllImages()
    {
        $webroot = Yii::getAlias('@webroot');
        $img = $webroot . $this->img;
        if ($this->img === null or $this->img === '' or !file_exists($img)) return;
        $name = StringHelper::basename($img);
        $dirname = StringHelper::dirname($img);
        $files = FileHelper::findFiles($dirname, ['only' => ['*'.$name]]);
        foreach ($files as $file) {
            if (file_exists($file)) FileHelper::unlink($file);
        }
    }

    /**
     * ADMIN DASHBOARD
     * *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  *  * /

    /**
     * @inheritDoc
     */
    public function input()
    {
        return [
            Input::image($this, 'img'),
            Input::translate($this, 'title', 'alias'),
            Input::textarea($this, 'description'),
            Input::editor($this, 'content'),
        ];
    }

    /**
     * @inheritDoc
     */
    public static function pageTitle()
    {
        return 'Полезные материалы';
    }

    /**
     * @inheritDoc
     */
    public static function listSort()
    {
        return [
            'created_at' => SORT_DESC,
        ];
    }

    /**
     * @inheritDoc
     */
    public static function listSearchIn()
    {
        return [
            'title',
            'description',
            'alias',
        ];
    }

    public static function listAttributes()
    {
        return [
            'id' => 'id',
            'title' => 'title',
            'description' => 'description',
        ];
    }
}
