<?php

use app\migrations\Migration;

/**
 * Class m201013_180607_table_news
 */
class m201013_180607_table_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('demo_news', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer(),
            'date' => $this->string(255),
            'title' => $this->string(255),
            'alias' => $this->string(255),
            'image' => $this->string(255),
            'description' => $this->string(255),
            'content' => $this->longText(),
        ], $this->options);
        $this->createIndex('idx-news_demo-alias', 'demo_news', 'alias');
        $this->addForeignKey('fk-demo_news-city', 'demo_news', 'city_id', 'city', 'id', 'SET NULL', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->removeTable('demo_news');
    }
}
