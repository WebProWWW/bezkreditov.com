<?php

namespace app\models;

use Yii;
use yii\base\Model;
use Exception;
use app\components\SendpulseApi;

/**
 * Class FormTest
 * @package app\models
 *
 * @property string $email
 * @property string $comment
 * @property array $_mailFrom
 */
class FormTest extends Model
{
    public $email;
    public $comment;

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
        if ($this->sendToAdmin()) {
            $this->sendToUser();
            $this->sendPulse();
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
            (new SendpulseApi())
                ->addEmails(SendpulseApi::BOOK, [[ 'email' => $this->email ]]);
            return true;
        } catch (Exception $e) {}
        return false;
    }
}