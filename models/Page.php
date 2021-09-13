<?php

namespace app\models;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property bool $is_default
 * @property bool $is_active
 * @property bool $is_menu
 * @property string $alias
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $class
 * @property string $label
 * @property string $menu_type
 *
 * @property PageBaseModel $model
 * @property int $pageNum
 * @property string $category
 * @property string $view
 *
 * @property Page $child
 * @property Page[] $childs
 * @property Page $parent
 * @property Page[] $nav
 */
class Page extends ActiveRecord
{

    const MENU_TYPE_DEFAULT = 'default';
    const MENU_TYPE_LABEL = 'label';
    const MENU_TYPE_NEWLINE = 'newline';

    public $model;
    public $category;
    public $pageNum;


    public static function tableName()
    {
        return 'page';
    }

    public function rules()
    {
        return [
            [['id', 'alias'], 'required'],
            [['id', 'is_default', 'is_active', 'is_menu', 'parent_id'], 'integer'],
            [['alias', 'title', 'keywords', 'description', 'img', 'class', 'menu_type'], 'string', 'max' => 255],
            // [['alias'], 'unique'], TODO
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'is_default' => 'Главная',
            'is_active' => 'Активен',
            'is_menu' => 'Показать в меню',
            'alias' => 'Псевдоним (url)',
            'title' => 'Заголовок (title)',
            'keywords' => 'Ключевые слова (meta keywords)',
            'description' => 'Описание (meta description)',
            'img' => 'Изображение',
            'class' => 'Model',
        ];
    }

    /**
     * @param array $params
     * @return Page
     */
    public static function findPage(array $params=[])
    {
        $alias = ArrayHelper::getValue($params, 'alias', 'index');
        $condition = [
            'alias' => $alias,
            'is_active' => 1,
            'parent_id' => null,
        ];
        if ($alias === 'index' || $alias === '') {
            $condition = ['is_default' => 1];
        }
        $page = self::findOne($condition);
        if ($page === null) {
            throw new NotFoundHttpException();
        }
        $page->category = ArrayHelper::getValue($params, 'category', 'index');
        $page->pageNum = (int) ArrayHelper::getValue($params, 'page', 1);
        try {
            $page->model = Yii::createObject($page->class, ['page' => $page]);
        } catch (InvalidConfigException $e) {
            throw new NotFoundHttpException('Class not exists: ' . $page->class);
        }
        return $page;
    }

    private $_nav;
    public function getNav()
    {
        if ($this->_nav === null) {
            $this->_nav = self::find()
                ->where([
                    'parent_id' => null,
                    'is_active' => 1,
                    'is_menu' => 1,
                ])
                ->with('childs')
                ->orderBy('order')
                ->all();
        }
        return $this->_nav;
    }

    private $_child;
    public function getChild()
    {
        if ($this->_child === null) {
            $this->_child = self::findOne([
                'parent_id' => $this->id,
                'is_active' => 1,
                'alias' => $this->category,
            ]);
        }
        return $this->_child;
    }

    private $_childs;
    /**
     * @return yii\db\ActiveQuery
     */
    public function getChilds()
    {
        if ($this->_childs === null) {
            $this->_childs = $this->hasMany(Page::class, ['parent_id' => 'id'])
                ->orderBy('order');
        }
        return $this->_childs;
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Page::class, ['id' => 'parent_id']);
    }
}
