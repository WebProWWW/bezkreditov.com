<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Class FormConsult
 * @package app\models
 */
class FormConsult extends Model
{
    public $name;
    public $phone;
    public $message;

    private $_isComposeError = false;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['name','phone','message'], 'required'],
            [['name','phone','message'], 'trim'],
            [['name','phone','message'], 'string'],
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
            'message' => 'Текст вашего вопроса',
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
        $title = 'Вопрос юристу по банкротству';
        $isSent = Yii::$app->mailer
            ->compose('consult', [ 'model' => $this, 'title' => $title ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setSubject($title)
            ->send();
        if ($isSent) return true;
        $this->_isComposeError = true;
        return false;
    }
}