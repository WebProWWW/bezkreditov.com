<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use Exception;
use app\components\SendpulseApi;

/**
 * Class FormConsult
 * @package app\models
 *
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property UploadedFile $userFile
 */
class FormContact extends Model
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $userFile;

    private $_isComposeError = false;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['name','email','subject','message'], 'required'],
            [['name','email','subject','message'], 'trim'],
            [['name','subject','message'], 'string'],
            [['email'], 'email'],
            [['userFile'], 'file', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Имя',
            'email' => 'Ваш Email',
            'subject' => 'Тема',
            'message' => 'Ваше сообщение',
        ];
    }

    /**
     * @inheritDoc
     */
    public function load($data, $formName = null)
    {
        $this->userFile = UploadedFile::getInstance($this, 'userFile');
        return parent::load($data, $formName);
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
        $title = 'Обратная связь';
        $message = Yii::$app->mailer->compose('contact', [ 'model' => $this, 'title' => $title ]);
        $message
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo('ju.lerchik@yandex.ru')
            ->setReplyTo($this->email)
            ->setSubject($this->subject);
        if ($this->userFile->tempName) {
            $message->attach($this->userFile->tempName, [
                'fileName' => $this->userFile->name,
                'contentType' => $this->userFile->type,
            ]);
        }
        if ($message->send()) {
            $this->sendPulse();
            return true;
        }
        $this->_isComposeError = true;
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