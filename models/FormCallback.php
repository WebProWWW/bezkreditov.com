<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Class FormConsult
 * @package app\models
 */
class FormCallback extends Model
{
    public $name;
    public $phone;
    public $title;
    private $_isComposeError = false;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['name','phone'], 'required'],
            [['name','phone','title'], 'trim'],
            [['name','phone','title'], 'string'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Имя',
            'phone' => 'Ваш номер телефона',
            'title' => 'Тема заявки',
        ];
    }

    /**
     * @inheritDoc
     */
    public function validate($attributeNames = null, $clearErrors = true)
    {
        if (parent::validate($attributeNames, $clearErrors)) {
            if ($this->_isComposeError) {
                $this->addError('message', 'Произошла ошибка, попробуйте еще раз');
                return false;
            }
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function send()
    {
        if (!$this->validate()) return false;
        $isSent = Yii::$app->mailer
            ->compose('callback', [ 'model' => $this ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setSubject($this->title)
            ->send();
        if ($isSent) return true;
        $this->_isComposeError = true;
        return false;
    }
}