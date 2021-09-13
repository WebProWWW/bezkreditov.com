<?php
namespace app\models;

use yii\base\BaseObject;

/**
 * @property string $file
 */
class PageFile extends PageBaseModel
{

    public function getView(): string
    {
        return 'file';
    }

    public function getFile()
    {
        $out = 'file' . '/' . $this->page->alias;
        if ($this->page->child) {
            $out = $out . '/' . $this->page->child->alias;
        }
        return $out;
    }
}