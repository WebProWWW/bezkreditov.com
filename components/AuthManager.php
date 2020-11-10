<?php
/**
 * Author: Timur Valiev
 * Site: https://webprowww.github.io
 * 2018-12-23 21:59
 */

namespace app\components;

use models\User;

use Yii;
use yii\rbac\Assignment;
use yii\rbac\PhpManager;
use yii\rbac\Role;

/**
 * Class AuthManager
 * @package components\user
 */
class AuthManager extends PhpManager
{
    public $assignmentFile = __DIR__.'/rbac/assignments.php';
    public $itemFile = __DIR__.'/rbac/items.php';
    public $ruleFile = __DIR__.'/rbac/rules.php';

    /**
     * @param int $id
     * @return array|mixed|Assignment[]
     */
    public function getAssignments($id)
    {
        if ($id && $user = $this->getUser($id)) {
            $assignment = new Assignment();
            $assignment->userId = $id;
            $assignment->roleName = $user->role;
            return [$assignment->roleName => $assignment];
        }
        return [];
    }

    /**
     * @param string $roleName
     * @param int $id
     * @return Assignment|null
     */
    public function getAssignment($roleName, $id)
    {
        if ($id && $user = $this->getUser($id)) {
            if ($user->role === $roleName) {
                $assignment = new Assignment();
                $assignment->userId = $id;
                $assignment->roleName = $user->role;
                return $assignment;
            }
        }
        return null;
    }

    /**
     * @param string $roleName
     * @return array
     */
    public function getUserIdsByRole($roleName)
    {
        return User::find()
            ->where(['role'=>$roleName,'status'=>Access::STATUS_ACTIVE])
            ->select('id')
            ->column();
    }

    /**
     * @param Role $role
     * @param int $id
     * @return Assignment|null
     */
    public function assign($role, $id)
    {
        if ($id && $user = $this->getUser($id)) {
            $assignment = new Assignment([
                'userId'     => $id,
                'roleName'   => $role->name,
                'createdAt'  => time(),
            ]);
            $this->setRole($user, $role->name);
            return $assignment;
        }
        return null;
    }

    /**
     * @param Role $role
     * @param int $id
     * @return bool
     */
    public function revoke($role, $id)
    {
        if ($id && $user = $this->getUser($id)) {
            if ($user->role === $role->name) {
                $this->setRole($user, null);
                return true;
            }
        }
        return false;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function revokeAll($id)
    {
        if ($id && $user = $this->getUser($id)) {
            $this->setRole($user, null);
            return true;
        }
        return false;
    }

    /**
     * @param int $id
     * @return User|yii\web\IdentityInterface|null
     */
    private function getUser($id)
    {
        $user = Yii::$app->user;
        if ($user && !$user->isGuest && $user->id === $id) {
            return $user->identity;
        }
        return User::findOne(['id'=>$id, 'status'=>Access::STATUS_ACTIVE]);
    }

    /**
     * @param User $user
     * @param string $roleName
     */
    private function setRole($user, $roleName)
    {
        $user->role = $roleName;
        $user->updateAttributes(['role'=>$roleName]);
    }
}