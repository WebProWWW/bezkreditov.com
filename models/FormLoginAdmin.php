<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Class FormLogin
 * @package app\models
 *
 * @property string $email
 * @property string $password
 * @property boolean $remember
 *
 * @property User $user
 */
class FormLoginAdmin extends Model
{
    public $email;
    public $password;
    public $remember = true;
    private $_user;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['remember', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    /**
     * @return array|string[]
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',
            'remember' => 'Запомнить меня',
        ];
    }

    /**
     * Validate Password
     */
    public function validatePassword()
    {
        if (!$this->hasErrors()) {
            if ($this->user and $this->user->validatePassword($this->password)) {
                if ($this->user->isWait) {
                    $this->addError('password', ''
                        .'Ваш аккаунт не активирован. Инструкция по акцивации отправлена на ваш Email '
                        .$this->user->email
                    .'');
                }
                if ($this->user->isBlock) {
                    $this->addError('password', 'Ваш аккаунт заблокирован.');
                }
            } else {
                $this->addError('password', 'Неверный email или пароль');
            }
        }
    }

    /**
     * @return bool
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->user, $this->remember ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByEmail($this->email);
        }
        return $this->_user;
    }
}