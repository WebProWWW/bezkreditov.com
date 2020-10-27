<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\helpers\StringHelper;
use yii\imagine\Image;
use yii\web\NotFoundHttpException;

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
 *
 * @property string|null $thumb
 *
 */
class News extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date', 'title', 'alias', 'image', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'alias' => 'Alias',
            'image' => 'Image',
            'description' => 'Description',
            'content' => 'Content',
        ];
    }

    /**
     * @param string $alias
     * @return News
     * @throws NotFoundHttpException
     */
    public static function findByAlias(string $alias)
    {
        $item = self::findOne(['alias' => $alias]);
        if ($item === null) {
            throw new NotFoundHttpException();
        }
        return $item;
    }

    /**
     * @return string|null
     */
    public function getThumb()
    {
        return null;
//        $webroot = Yii::getAlias('@webroot');
//        $img = $webroot . $this->img;
//        if ($this->img === null or !file_exists($img)) return null;
//        $name = StringHelper::basename($img);
//        $dirname = StringHelper::dirname($img);
//        $thumb = $dirname . '/thumb-' . $name;
//        if (!file_exists($thumb)) {
//            Image::thumbnail($img, 500, 400)->save($thumb);
//        }
//        return str_replace($webroot, '', $thumb);
    }

    public static function updateColumns()
    {
//        /* @var $item News */
//        $news = self::find()->all();
//        $path = '/home/parser/fssp-news-scraper/feed/images';
//        foreach ($news as $item) {
//            $img = $path . '/' . $item->image;
//            $name = StringHelper::basename($img);
//            move_uploaded_file($img, '/var/www/public_html/img/news/'.$name);
//            //$item->alias = Yii::$app->security->generateRandomString();//self::cyrLat($item->title);
//            //$item->update(false, ['alias']);
//        }
    }

    /**
     * @param string $in
     * @return string
     */
    public static function cyrLat(string $in = '')
    {
        $cyr = ['№','Я', 'я', 'Ю', 'ю', 'Ч', 'ч', 'Ш', 'ш', 'Щ', 'щ', 'Ж', 'ж', 'А','а','Б','б','В','в','Г','г','Д','д','Е','е','Ё','ё','З','з','И','и','Й','й','К','к','Л','л','М','м','Н','н','О','о','П','п','Р','р','С','с','Т','т','У','у','Ф','ф','Х','х','Ц','ц','Ы','ы','Ь','ь','Ъ','ъ','Э','э'];
        $lat = ['n','Ya','ya','Yu','yu','Ch','ch','Sh','sh','Sh','sh','Zh','zh','A','a','B','b','V','v','G','g','D','d','E','e','E','e','Z','z','I','i','J','j','K','k','L','l','M','m','N','n','O','o','P','p','R','r','S','s','T','t','U','u','F','f','H','h','C','c','Y','y','' ,'' ,'' ,'' ,'E','e'];
        $out = str_replace($cyr, $lat, $in);
        $out = preg_replace('/_+$/m', '', $out);
        $out = preg_replace('/[\s_]/m', '-', $out);
        $out = preg_replace('/[\s~`!@#$%^&*()+={}|\'":;\/,.?№\[\]]/m', '', $out);
        $out = preg_replace('/[-]{2,}/im', '-', $out);
        $out = preg_replace('/\n/im', '', $out);
        $out = trim(trim($out), '-');
        return strtolower($out);
    }
}
