<?php

namespace app\models;

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Yii;
use yii\base\Model;
use Exception;

/**
 * Class FormTest
 * @package app\models
 */
class FormTest extends Model
{
    public $email;
    public $comment;

    private $_spId = 'dbfac1281991f1e3e4f6a069ed592d27';
    private $_spSecret = '2de1513fb979132484cad375f018e67c';
    private $_spBookId = 1075435;

    private $_mailFrom = ['noreply@bezkreditov.com' => 'Без Кредитов'];

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
     * @return bool
     */
    public function send()
    {
        if (!$this->validate()) return false;
        if ($this->sendToUser() and $this->sendToAdmin() and $this->sendPulse()) {
            return true;
        }
        $this->addError('email', 'Произошла ошибка, попробуйте еще раз');
        return false;
    }

    /**
     * @return bool
     */
    private function sendToUser()
    {
        $title = 'Предварительное решение о возможности списания всех ваших долгов';
        $isSent = Yii::$app->mailer
            ->compose('pdf', [ 'model' => $this, 'title' => $title ])
            ->setFrom($this->_mailFrom)
            ->setTo($this->email)
            ->setSubject($title)
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
        $title = 'Пройти тест и получить предварительное решение';
        $isSent = Yii::$app->mailer
            ->compose('pdf-admin', [ 'model' => $this, 'title' => $title ])
            ->setFrom($this->_mailFrom)
            ->setTo('ju.lerchik@yandex.ru')
            ->setSubject($title)
            ->send();
        if ($isSent) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    private function sendPulse()
    {
        try {
            $sp = new ApiClient($this->_spId, $this->_spSecret, new FileStorage());
            $sp->addEmails($this->_spBookId, [[ 'email' => $this->email ]]);
            return true;
        } catch (Exception $e) {}
        return false;
    }
}