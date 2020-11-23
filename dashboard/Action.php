<?php

namespace app\dashboard;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use Exception;
use yii\web\NotFoundHttpException;
use Throwable;

/**
 * Class Action
 * @package app\dashboard
 */
class Action
{
    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'has-error';

    /**
     * @param string $className
     * @return array|string
     * @throws NotFoundHttpException
     */
    public static function create(string $className)
    {
        /* @var $model ModelInterface|ActiveRecord */
        $class = self::getClass($className);
        try {
            $model = new $class;
            $title = call_user_func($class . '::pageTitle');
        } catch (Exception $e) { throw new NotFoundHttpException('Action::create call_user_func'); }
        $req = Yii::$app->request;
        $status = '';
        if ($model->load($req->post(), '') ) {
            $status = $model->save() ? self::STATUS_SUCCESS : self::STATUS_ERROR;
        }
        return [
            'status' => $status,
            'title' => $title,
            'model' => $model->input(),
        ];
    }

    /**
     * @param string $className
     * @param int|string $id
     * @return array|string
     * @throws NotFoundHttpException
     */
    public static function update(string $className, int $id)
    {
        /* @var $model ModelInterface|ActiveRecord */
        $id = (int) $id;
        $class = self::getClass($className);
        try {
            $model = call_user_func($class . '::findOne', $id);
            $title = call_user_func($class . '::pageTitle');
        } catch (Exception $e) { throw new NotFoundHttpException('Action::update call_user_func'); }
        $req = Yii::$app->request;
        $status = '';
        if ($model->load($req->post(), '') ) {
            $status = $model->save() ? self::STATUS_SUCCESS : self::STATUS_ERROR;
        }
        return [
            'status' => $status,
            'title' => $title,
            'model' => $model->input(),
        ];
    }

    /**
     * @param string $className
     * @return array
     * @throws NotFoundHttpException
     */
    public static function list (string $className)
    {
        /* @var $query ActiveQuery */
        $class = self::getClass($className);
        $page = (int) Yii::$app->request->post('page', 1);
        if ($page < 1) $page = 1;
        $search = Yii::$app->request->post('search', '');
        try {
            $query = call_user_func($class . '::find');
            $listSort = call_user_func($class . '::listSort');
            $title = call_user_func($class . '::pageTitle');
            $searchCols = call_user_func($class . '::listSearchIn');
            $listAttributes = call_user_func($class . '::listAttributes');
        }
        catch (Exception $e) { throw new NotFoundHttpException('Action::list call_user_func'); }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
                'params' => [
                    'page' => $page,
                ],
            ],
            'sort' => [
                'defaultOrder' => $listSort
            ],
        ]);
        if ($search) {
            $filterCols = ['or'];
            foreach ($searchCols as $col) {
                $filterCols[] = ['like', $col, $search];
            }
            $query->andFilterWhere($filterCols);
        }
        $pagination = $dataProvider->pagination;
        return [
            'title' => $title,
            'page' => $page,
            'search' => $search,
            'models' => $dataProvider->models,
            'attributes' => $listAttributes,
            'pageSize' => $pagination->pageSize,
            'totalCount' => $pagination->totalCount,
        ];
    }

    /**
     * @param string $className
     * @param int|string $id
     * @throws NotFoundHttpException|Throwable
     */
    public static function remove(string $className, int $id)
    {
        /* @var $model ModelInterface|ActiveRecord */
        $id = (int) $id;
        $class = self::getClass($className);
        try {
            $model = call_user_func($class . '::findOne', $id);
            $model->delete();
        } catch (Exception $e) { throw new NotFoundHttpException('Action::remove call_user_func'); }
        return self::list($className);
    }

    /**
     * @param string $name
     * @return ActiveRecord
     * @throws NotFoundHttpException
     */
    public static function getClass(string $name)
    {
        /* @var $class ActiveRecord */
        $nameArr = explode('-', strtolower($name));
        $class = '';
        foreach ($nameArr as $str) {
            $class = $class . ucfirst($str);
        }
        $class = '\app\models\\' . $class;
        if (class_exists($class)) return $class;
        throw new NotFoundHttpException('Exists: ' . $class);
    }
}