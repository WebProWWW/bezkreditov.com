<?php

namespace app\dashboard;

use yii\db\ActiveRecordInterface;

/**
 * Interface ModelInterface
 * @package app\dashboard
 */
interface ModelInterface extends ActiveRecordInterface
{

    /**
     * @return array
     */
    public function input();

    /**
     * page title
     * @return string
     */
    public static function pageTitle();

    /**
     * default order column
     * ['created_at' => SORT_DESC]
     * @return array
     */
    public static function listSort();

    /**
     * columns for global search
     * ['title', 'description', ...]
     * @return array
     */
    public static function listSearchIn();

    /**
     * ['id' => $modelId, 'title' => $modelTitle, 'description' => $modelDesc]
     * id - required
     * @return array
     */
    public static function listAttributes();
}