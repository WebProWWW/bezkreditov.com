<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\ArrayHelper;
use app\components\Access;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $status
 * @property string $role
 * @property string $username
 * @property string $email
 * @property string|null $email_confirm_token
 * @property string $api_key
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property int|null $subscribe
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property bool $isActive
 * @property bool $isWait
 * @property bool $isBlock
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [ TimestampBehavior::class ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'subscribe', 'created_at', 'updated_at'], 'integer'],
            [['username', 'email', 'api_key', 'auth_key', 'password_hash'], 'required'],
            [['role', 'username', 'email', 'email_confirm_token', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['api_key', 'auth_key'], 'string', 'max' => 32],
            [['email'], 'unique'],
            [['email_confirm_token'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'role' => 'Role',
            'username' => 'Ваше Имя',
            'email' => 'Email',
            'email_confirm_token' => 'Email Confirm Token',
            'api_key' => 'Api Key',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'subscribe' => 'Subscribe',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @param string $password
     * @return bool
     */
    public function validatePassword(string $password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * @param string $email
     * @return User|null
     */
    public static function findByEmail(string $email)
    {
        return self::findOne([
            'email' => $email,
        ]);
    }

    /**
     * @return bool
     */
    public function getIsActive() { return $this->status === Access::STATUS_ACTIVE; }

    /**
     * @return bool
     */
    public function getIsWait() { return $this->status === Access::STATUS_WAIT; }

    /**
     * @return bool
     */
    public function getIsBlock() { return $this->status === Access::STATUS_BLOCK; }

    /**
     * @param string $token
     * @return bool
     * @throws NotFoundHttpException
     */
    public static function confirmEmail(string $token)
    {
        $user = self::findOne([
            'status' => Access::STATUS_WAIT,
            'email_confirm_token' => $token,
        ]);
        if ($user === null) throw new NotFoundHttpException();
        $user->email_confirm_token = null;
        $user->status = Access::STATUS_ACTIVE;
        return $user->save();
    }



    /**
     * IdentityInterface
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    /**
     * @inheritDoc
     */
    public static function findIdentity($id)
    {
        return self::findOne(['id' => $id, 'status' => Access::STATUS_ACTIVE]);
    }

    /**
     * @inheritDoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['api_key' => $token, 'status' => Access::STATUS_ACTIVE]);
    }

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritDoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritDoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
