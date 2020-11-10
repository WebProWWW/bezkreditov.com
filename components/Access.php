<?php

namespace app\components;

use Yii;
use yii\console\ExitCode;
use Exception;

/**
 * Class Access
 * @package components\user
 */
class Access
{

    const ROLE_USER             = 'User';
    const ROLE_USER_DESC        = 'Пользователь';

    const ROLE_ADMIN            = 'Admin';
    const ROLE_ADMIN_DESC       = 'Администратор';

    const STATUS_BLOCK          = 10;
    const STATUS_WAIT           = 20;
    const STATUS_ACTIVE         = 30;

    public static function statuses()
    {
        return [
            self::STATUS_BLOCK      => 'Заблокирован',
            self::STATUS_WAIT       => 'Активация',
            self::STATUS_ACTIVE     => 'Активен',
        ];
    }

    public static function roles()
    {
        return [
            self::ROLE_ADMIN        => self::ROLE_ADMIN_DESC,
            self::ROLE_USER         => self::ROLE_USER_DESC,
        ];
    }

    public static function createRoles()
    {
        $auth = new AuthManager();
        $auth->removeAll();
        try {
            foreach (self::roles() as $role => $desc) {
                $user = $auth->createRole($role);
                $user->description = $desc;
                $auth->add($user);
            }
        } catch (Exception $exception) {
            return ExitCode::UNSPECIFIED_ERROR;
        }
        return ExitCode::OK;
    }

    /**
     * @param Migration $migration
     */
    public static function insertUsers(Migration $migration)
    {
        $migration->batchInsert('user', ['username', 'email', 'status', 'role', 'api_key', 'auth_key', 'password_hash', 'created_at', 'updated_at'], [[
            /* username         */ 'Админ',
            /* email            */ 'admin@example.com',
            /* status           */ self::STATUS_ACTIVE,
            /* role             */ self::ROLE_ADMIN,
            /* api_key          */ Yii::$app->security->generateRandomString(32),
            /* auth_key         */ Yii::$app->security->generateRandomString(32),
            /* password_hash    */ Yii::$app->security->generatePasswordHash('123456'),
            /* created_at       */ time(),
            /* updated_at       */ time(),
        ], [
            /* username         */ 'Пользователь',
            /* email            */ 'user@example.com',
            /* status           */ self::STATUS_ACTIVE,
            /* role             */ self::ROLE_USER,
            /* api_key          */ Yii::$app->security->generateRandomString(32),
            /* auth_key         */ Yii::$app->security->generateRandomString(32),
            /* password_hash    */ Yii::$app->security->generatePasswordHash('123456'),
            /* created_at       */ time(),
            /* updated_at       */ time(),
        ]]);
    }

}