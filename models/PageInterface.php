<?php
namespace app\models;

/**
 *
 * @property string $view
 *
 */
interface PageInterface
{
    /**
     * @return string
     */
    public function getView(): string;
}