<?php

namespace app\dashboard;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * Class Input
 * @package app\dashboard
 */
class Input
{
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_EDITOR = 'editor';
    const TYPE_IMAGE = 'image';
    /**
     * @param string $type
     * @param ActiveRecord $model
     * @param string $attr
     * @return array
     */
    public static function base(string $type, ActiveRecord $model, string $attr)
    {
        return [
            'name' => $attr,
            'type' => $type,
            'value' => ArrayHelper::getValue($model, $attr),
            'label' => $model->getAttributeLabel($attr),
            'error' => $model->getFirstError($attr),
        ];
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @return array
     */
    public static function text(ActiveRecord $model, string $attr)
    {
        return self::base(self::TYPE_TEXT, $model, $attr);
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @return array
     */
    public static function textarea(ActiveRecord $model, string $attr)
    {
        return self::base(self::TYPE_TEXTAREA, $model, $attr);
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @return array
     */
    public static function editor(ActiveRecord $model, string $attr)
    {
        return self::base(self::TYPE_EDITOR, $model, $attr);
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @return array
     */
    public static function image(ActiveRecord $model, string $attr)
    {
        return ArrayHelper::merge(self::base(self::TYPE_IMAGE, $model, $attr), [
            'uploaded' => $attr . 'Uploaded',
        ]);
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @param string $attrTo
     * @return array
     */
    public static function translate(ActiveRecord $model, string $attr, string $attrTo)
    {
        return ArrayHelper::merge(self::base('translate', $model, $attr), [
            'active' => ArrayHelper::getValue($model, $attrTo, 1) ? 0 : 1,
            'to' => self::base('text', $model, $attrTo),
        ]);
    }

    /**
     * @param ActiveRecord $model
     * @param string $attr
     * @param array $options
     * @return array
     */
    public static function select(ActiveRecord $model, string $attr, array $options)
    {
        return ArrayHelper::merge(self::base('select', $model, $attr), [
            'options' => $options
        ]);
    }
}