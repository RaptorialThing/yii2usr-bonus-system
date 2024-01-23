<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_bonus}}`.
 */
class m240122_205207_create_user_bonus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_bonus}}', [
            'id' => $this->primaryKey(),
            'points' => $this->bigInteger()->unsigned()->defaultValue(0),
            'comment' => $this->text(),
            'date_create' => $this->date(),
            'user_id' => $this->bigInteger()->notNull(),
        ]);

        $this->addForeignKey(
            'idx-user-bonus-user_id',
            'user_bonus',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_bonus}}');
    }
}
