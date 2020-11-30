<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\helpers\StringHelper;
use yii\imagine\Image;
use yii\web\NotFoundHttpException;
use yii\behaviors\TimestampBehavior;

use app\dashboard\ModelInterface;
use app\dashboard\Input;
use yii\web\UploadedFile;

/**
 * This is the model class for table "demo_news".
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $title
 * @property string|null $alias
 * @property string|null $image
 * @property string|null $description
 * @property string|null $content
 * @property int $published
 *
 * @property int $viewCount
 *
 * @property Region $region
 * @property string|null $img
 * @property string|null $thumb
 *
 */
class News extends ActiveRecord implements ModelInterface
{
    public $region_code = 99;
    //public $imageUploaded;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'date',
                'updatedAtAttribute' => 'updated',
            ]
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'region_code'], 'required'],
            [['region_code'], 'integer'],
            [['content'], 'string'],
            [['title', 'alias', 'image', 'description'], 'string', 'max' => 255],
            //[['imageUploaded'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Создан',
            'region_code' => 'Регион',
            'title' => 'Заголовок',
            'alias' => 'Псевдоним URL',
            'image' => 'Изображение',
            'img' => 'Изображение',
            'description' => 'Описание',
            'content' => 'Содержимое',
        ];
    }

    /**
     * @inheritDoc
     */
    public function afterFind()
    {
        parent::afterFind();
        if ($region = $this->region) $this->region_code = $region->code;
        if (is_string($this->image)) $this->image =  '/img/news/' . $this->image;
    }

    /**
     * @inheritDoc
     */
    public function beforeSave($insert)
    {
        if ($file = UploadedFile::getInstanceByName('imageUploaded')) {
            $webroot = Yii::getAlias('@webroot');
            $name = Yii::$app->security->generateRandomString(8);
            $url = $name . '.jpg';
            $path = $webroot . '/img/news/' . $url;
            $file->saveAs($path);
            Image::resize($path, 500, 400, false, true)
                ->save($path, ['quality' => 80]);
            $this->image = $url;
        } else {
            $this->image = str_replace('/img/news/', '', $this->image);
        }
        return parent::beforeSave($insert);
    }

    /**
     * @inheritDoc
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($this->region) {
            $this->unlink('region', $this->region, true);
        }
        $region = Region::findOne([ 'code' => $this->region_code ]);
        $this->link('region', $region);
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
     * @param string $alias
     * @param int $id
     * @return News
     * @throws NotFoundHttpException
     */
    public static function findByAlias(string $alias, int $id = null)
    {
        $cond = array_merge(['alias' => $alias], $id ? ['id' => $id] : []);
        $item = self::findOne($cond);
        if ($item === null) {
            throw new NotFoundHttpException();
        }
        return $item;
    }

    /**
     * @return NewsRegion|ActiveQuery
     */
    public function getNewsRegion()
    {
        return $this->hasMany(NewsRegion::class, ['news_id' => 'id']);
    }

    /**
     * @return Region|ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::class, ['code' => 'region_code'])
            ->via('newsRegion');
    }

    /**
     * @param string $default
     * @return string|null
     */
    public function getThumb(string $default='/img/image.svg')
    {
        $webroot = Yii::getAlias('@webroot');
        $img = $webroot . $this->image;
        if ($this->image === null or $this->image === '/img/news/' or !file_exists($img)) return $default;
        $name = StringHelper::basename($img);
        $dirname = StringHelper::dirname($img);
        $thumb = $dirname . '/th-' . $name;
        if (!file_exists($thumb)) Image::thumbnail($img, 500, 400)->save($thumb);
        if (!file_exists($thumb)) return $default;
        return str_replace($webroot, '', $thumb);
    }

    /**
     * @return array
     */
    public static function regionOptions()
    {
        $regions = Yii::$app->cache->get('all-regions-all');
        if ($regions === false) {
            $regions = ArrayHelper::map(Region::find()->all(), 'code', 'region_name');
            Yii::$app->cache->set('all-regions-all', $regions, 3600 * 24 * 365);
        }
        return $regions;
    }

    /**
     * REMOVE THIS IMAGES
     */
    private function removeAllImages()
    {
        $webroot = Yii::getAlias('@webroot');
        $img = $webroot . $this->image;
        if ($this->image === null or $this->image === '/img/news/' or !file_exists($img)) return;
        $name = StringHelper::basename($img);
        $dirname = StringHelper::dirname($img);
        $files = FileHelper::findFiles($dirname, ['only' => ['*'.$name]]);
        foreach ($files as $file) {
            if (file_exists($file)) {
                FileHelper::unlink($file);
            }
        }
    }

    public function getViewCount()
    {
        $count = 123;
        if ($count >= 1000000000) return round($count / 1000000000, 1) . 'G';
        if ($count >= 1000000) return round($count / 10000000, 1) . 'M';
        if ($count >= 1000) return round($count / 1000, 1) . 'K';
        return $count;
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
            Input::image($this, 'image'),
            Input::select($this, 'region_code', self::regionOptions()),
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
        return 'Новости';
    }

    /**
     * @inheritDoc
     */
    public static function listSort()
    {
        return ['date' => SORT_DESC];
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

    /**
     * @inheritDoc
     */
    public static function listAttributes()
    {
        return [
            'id' => 'id',
            'title' => 'title',
            'description' => 'description'
        ];
    }
}
