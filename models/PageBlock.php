<?php
namespace app\models;

use Yii;

/**
 *
 * @property array $blocks
 *
 */
class PageBlock extends PageBaseModel
{
    public function getView(): string
    {
        return 'block';
    }

    private $_blocks;

    public function getBlocks()
    {
        if ($this->_blocks === null) {
            $blocks = Yii::$app->cache->getOrSet('app-page-block', function () {
                return Block::find()
                    ->with('model')
                    ->where([
                        'page_id' => $this->page->id,
                        'active' => 1,
                    ])
                    ->orderBy([
                        'order' => SORT_ASC
                    ])
                    ->all();
            }, 0);
            $this->_blocks = [];
            foreach ($blocks as $block) {
                $this->_blocks[] = $block->model;
            }
        }
        return $this->_blocks;
    }
}