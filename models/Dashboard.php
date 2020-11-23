<?php


namespace app\models;


use app\dashboard\ModelInterface;

class Dashboard implements ModelInterface
{

    /**
     * @inheritDoc
     */
    public static function listData()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public static function readData($id)
    {
        return [
            'title' => 'Главная',
            'data' => [
                'model' => new self(),
            ],
        ];
    }
}