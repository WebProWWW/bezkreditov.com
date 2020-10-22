<?php

namespace app\models;

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Yii;
use yii\base\Model;
use Exception;

/**
 * Class FormEmail
 * @package app\models
 */
class FormEmail extends Model
{
    public $email;
    public $phone;

    private $_sendError = false;
    private $_spId = 'dbfac1281991f1e3e4f6a069ed592d27';
    private $_spSecret = '2de1513fb979132484cad375f018e67c';
    private $_spBookId = 1075435;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email', 'phone'], 'trim'],
            [['email'], 'email'],
            [['phone'], 'string'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
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
                $this->addError('email', 'Произошла ошибка, попробуйте еще раз');
                return false;
            }
            return true;
        }
        return false;

    }

    /**
     * @return bool
     */
    public function sendFile()
    {
        if (!$this->validate()) return false;
        $isSent = Yii::$app->mailer->compose('pdf', [ 'model' => $this ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo($this->email)
            ->setSubject('Как общаться с коллекторами')
            ->attach(Yii::getAlias('@app').'/mail/attachments/example.pdf')
            ->send();
        if ($isSent) {
            //TODO sendpulse на сайте не работает. Локально работает. WTF?
            /*
            try {
                $sp = new ApiClient($this->_spId, $this->_spSecret, new FileStorage());
                $sp->addEmails($this->_spBookId, [[
                    'email' => $this->email,
                    'variables' => [ 'Phone' => $this->phone ],
                ]]);
            } catch (Exception $e) {
                $this->_sendError = true;
                return false;
            }
            */
            return true;
        }
        $this->_sendError = true;
        return false;
    }
}