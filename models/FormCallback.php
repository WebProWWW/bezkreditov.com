<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Class FormCallback
 * @package app\models
 */
class FormCallback extends Model
{
    public $phone;
    public $comment;

    private $_sendError = false;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['phone', 'comment'], 'trim'],
            [['phone'], 'string'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'phone' => 'Номер телефона',
        ];
    }

    /**
     * @inheritDoc
     */
    public function validate($attributeNames = null, $clearErrors = true)
    {
        if (parent::validate($attributeNames, $clearErrors)) {
            if ($this->_sendError) {
                $this->addError('phone', 'Произошла ошибка, попробуйте еще раз');
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
        $isSent = Yii::$app->mailer->compose('callback', [ 'model' => $this ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setSubject('Заявка на расчет стоимости')
            ->send();
        if ($isSent) {
            return true;
        }
        $this->_sendError = true;
        return false;
    }
}