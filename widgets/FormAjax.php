<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * Class FormAjax
 * @package app\widgets
 *
 * @property string $formName
 * @property string $action
 */
class FormAjax extends Widget
{
    public $formName = '';
    public $action = '';

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        ob_start();
    }

    /**
     * @inheritDoc
     */
    public function run()
    {
        return ''
            .Html::beginForm(null, 'post', [
                'data-action' => Url::to($this->action),
                'class' => 'js-form-ajax',
            ])
                .ob_get_clean()
            .Html::endForm()
        .'';
    }

    /**
     * @param string $content
     * @param array $opt
     * @return string
     */
    public function submit(string $content, $opt = [])
    {
        return Html::submitButton($content, ArrayHelper::merge([
            'class' => 'btn btn-default js-form-ajax-loader',
        ], $opt));
    }

    public function successMessage(string $content)
    {
        return Html::tag('div', $content, [
            'class' => 'p fw-600 d-none js-form-ajax-success-message'
        ]);
    }

    /**
     * @param string $name
     * @param string|null $label
     * @param string $placeholder
     * @param string $mask
     * @return string
     */
    public function inputText(string $name, string $label = null, string $placeholder = null, string $mask = null)
    {
        $label = $label ? $this->label($label, $name) : '';
        $options = [ 'class' => 'input', 'id' => $this->id('input', $name) ];
        if ($placeholder) $options['placeholder'] = $placeholder;
        if ($mask) $options['data-mask'] = $mask;
        $input = Html::input('text', $this->name($name), null, $options);
        return $label . $input . $this->error($name);
    }

    /**
     * @param string $name
     * @param string|null $label
     * @param string $placeholder
     * @param int $rows
     * @return string
     */
    public function textarea(string $name, string $label = null, string $placeholder = '', int $rows = 5)
    {
        $label = $label ? $this->label($label, $name) : '';
        $input = Html::textarea($this->name($name), null, [
            'class' => 'input',
            'id' => $this->id('input', $name),
            'placeholder' => $placeholder,
            'rows' => $rows,
        ]);
        return $label . $input . $this->error($name);
    }

    public function inputFile(string $name, string $label = null)
    {
        $inputId = Yii::$app->security->generateRandomString(13);
        $labelId = Yii::$app->security->generateRandomString(13);
        $input = Html::input('file', $this->name($name), null, [
            'class' => 'd-none',
            'id' => $inputId,
            'data-file-label' => '#' . $labelId,
        ]);
        return ''
        .'<div class="row align-items-center">'
            .$input
            .'<div class="col">'
                .'<p class="em-9 right" id="' . $labelId . '" data-placeholder="' . $label . '">'
                    .$label
                .'</p>'
            .'</div>'
            .'<div class="col-auto">'
                .'<span class="btn-default btn-sm" data-file-input="#' . $inputId . '">'
                    .'Прекрипить'
                .'</span>'
            .'</div>'
        .'</div>';
    }

    /**
     * @param string $content
     * @param string $name
     * @return string
     */
    public function label(string $content, string $name)
    {
        $for = $this->id('input', $name);
        return Html::label($content, $for, ['class' => 'label']);
    }

    /**
     * @param string $name
     * @return string
     */
    public function error(string $name)
    {
        return Html::tag('span', '', [
            'class' => 'input-error d-none',
            'id' => $this->id('error', $name),
        ]);
    }

    /**
     * @param string $type
     * @param string $name
     * @return string
     */
    private function id(string $type, string $name)
    {
        return 'form-ajax-' . $type . '-' . strtolower($this->formName) . '-' . $name;
    }

    /**
     * @param string $name
     * @return string
     */
    private function name(string $name)
    {
        return $this->formName . '[' . $name . ']';
    }
}