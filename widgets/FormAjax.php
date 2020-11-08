<?php

namespace app\widgets;

use Yii;
use yii\base\Event;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/**
 * Class FormAjax
 * @package app\widgets
 *
 * @property string $formName
 * @property string $action
 * @property string $success
 * @property string $error
 * @property string $_id
 */
class FormAjax extends Widget
{
    const EVENT_NOTIFY_MODALS = 'EventAjaxNotifyModals';

    public $formName = '';
    public $action = '';
    public $success = 'Сообщение успешно отправлено.';
    public $error = '<strong>Произошла ошибка.</strong><br>Попробуйте позже';

    private $_id = '';

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $this->_id = Yii::$app->security->generateRandomString(13);
        Yii::$app->view->on(self::EVENT_NOTIFY_MODALS, [ $this, 'notifyModals' ]);
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
                'id' => $this->_id,
            ])
                .ob_get_clean()
            .Html::endForm()
        .'';
    }

    /**
     * @param Event $event
     */
    protected function notifyModals(Event $event)
    {
        Yii::$app->view->off(self::EVENT_NOTIFY_MODALS, [ $this, 'notifyModals' ]);
        echo ''
        .'<div class="modal modal-sm" id="' . $this->_id . '-modal-success">'
            .'<p class="center">' . $this->success . '</p>'
        .'</div>'
        .'<div class="modal modal-sm" id="' . $this->_id . '-modal-error">'
            .'<p class="center">' . $this->error . '</p>'
        .'</div>'
        .'';
    }

    /**
     * @param string $content
     * @return string
     */
    public function submit(string $content)
    {
        return Html::submitButton($content, [
            'class' => 'btn btn-default',
            'id' => $this->_id . '-button',
        ]);
    }

    /**
     * @param string $name
     * @param string $label
     * @param string $placeholder
     * @param string $mask
     * @return string
     */
    public function inputText(string $name, string $label = null, string $placeholder = null, string $mask = null)
    {
        $label = $label ? $this->label($label, $name) : '';
        if ($placeholder) $options[] = $placeholder;
        if ($mask) $options['data-mask'] = $mask;
        $input = Html::input('text', $this->name($name), null, ArrayHelper::merge([
            'class' => 'input',
            'id' => $this->id('input', $name),
        ], $placeholder ? [
            'placeholder' => $placeholder,
        ] : [], $mask ? [
            'data-mask' => $mask,
        ] : []));
        return $label . $input . $this->error($name);
    }

    /**
     * @param string $name
     * @param string $label
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

    /**
     * @param string $name
     * @param string $label
     * @return string
     */
    public function inputFile(string $name, string $label = null)
    {
        $inputId = $this->id('file', $name);
        $labelId = Yii::$app->security->generateRandomString(13);
        $input = Html::input('file', $this->name($name), null, [
            'class' => 'd-none',
            'id' => $inputId,
        ]);
        return ''
        .'<div class="row align-items-center">'
            .$input
            .'<div class="col">'
                .'<p class="em-9 right" id="' . $inputId . '-label">'
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
        return Html::label($content, $this->id('input', $name), ['class' => 'label']);
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
        return $this->_id . '-' . $type . '-' . strtolower($this->formName) . '-' . $name;
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