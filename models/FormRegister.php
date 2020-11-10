<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\components\Access;
use yii\web\NotFoundHttpException;

/**
 * Class Registr
 * @package site\forms
 *
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $password_repeat
 * @property bool $subscribe
 *
 * @property array|null $_userErrors
 */
class FormRegister extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $subscribe=true;

    private $_userErrors;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'password_repeat'], 'required'],
            ['password', 'compare'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => User::class],
            ['subscribe', 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя',
            'email' => 'Email',
            'password' => 'Пароль',
            'password_repeat' => 'Подтвердите пароль',
            'subscribe' => 'Подписаться на рассылку',
        ];
    }

    public function validate($attributeNames = null, $clearErrors = true)
    {
        if (parent::validate($attributeNames, $clearErrors)) {
            if (is_array($this->_userErrors)) {
                foreach ($this->_userErrors as $msg) {
                    $this->addError('user', $msg);
                    break;
                }
                return false;
            }
            return true;
        }
        return false;
    }

    /**
     * @return bool
     * @throws NotFoundHttpException
     */
    public function create()
    {
        if (!$this->validate()) return false;
        $user = new User([
            'username' => $this->username,
            'email' => $this->email,
            'subscribe' => $this->subscribe,
            'role' => Access::ROLE_USER,
            'status' => Access::STATUS_WAIT,
            'auth_key' => Yii::$app->security->generateRandomString(32),
            'api_key' => Yii::$app->security->generateRandomString(32),
            'password_hash' => Yii::$app->security->generatePasswordHash($this->password),
            'email_confirm_token' => Yii::$app->security->generateRandomString(),
        ]);
        if (!$user->save()) throw new NotFoundHttpException();
        $isSent = Yii::$app->mailer
            ->compose('activation', ['user' => $user])
            ->setFrom(['noreply@bezkreditov.com' => 'Без Кредитов'])
            ->setTo($user->email)
            ->setSubject('Активация аккаунта')
            ->send();
        if ($isSent) return true;
        throw new NotFoundHttpException();
    }
}