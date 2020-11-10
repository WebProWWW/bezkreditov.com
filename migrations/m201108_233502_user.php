<?php

use app\components\Migration;
use app\components\Access;

/**
 * Class m201108_233502_user
 */
class m201108_233502_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'status' => $this->smallInteger()->notNull()->defaultValue(Access::STATUS_WAIT),
            'role' => $this->string()->notNull()->defaultValue(Access::ROLE_USER),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'email_confirm_token' => $this->string()->unique(),
            'api_key' => $this->string(32)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'subscribe' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->integer()->null(),
            'updated_at' => $this->integer()->null(),
        ], $this->options);
        $this->createIndex('idx-user-status', 'user', 'status');
        $this->createIndex('idx-user-auth_key', 'user', 'auth_key');
        $this->createIndex('idx-user-api_key', 'user', 'api_key');

        Access::insertUsers($this);
        Access::createRoles();

        return true;

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //$this->removeTable('user');
        echo "\nm201108_233502_user cannot be reverted.\n\n";
        return false;
    }
}
