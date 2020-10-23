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
    public $comment;

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
            [['email', 'comment'], 'trim'],
            [['email'], 'email'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
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
        if ($this->sendToUser()) {
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
            $this->sendToAdmin();
            return true;
        }
        $this->_sendError = true;
        return false;
    }

    /**
     * @return bool
     */
    private function sendToUser()
    {
        $isSent = Yii::$app->mailer->compose('pdf', [ 'model' => $this ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo($this->email)
            ->setSubject('Как общаться с коллекторами')
            ->attach(Yii::getAlias('@app').'/mail/attachments/example.pdf')
            ->send();
        if ($isSent) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    private function sendToAdmin()
    {
        $isSent = Yii::$app->mailer->compose('pdf-admin', [ 'model' => $this ])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setSubject('Отправлен pdf «Предварительно решение»')
            ->send();
        if ($isSent) {
            return true;
        }
        return false;
    }
}