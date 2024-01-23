<?php

use yii\db\Migration;

/**
 * Class m240122_173100_add_balance_to_user_record
 */
class m240122_173100_add_balance_to_user_record extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'balance', $this->bigInteger()->unsigned()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'balance');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240122_173100_add_balance_to_user_record cannot be reverted.\n";

        return false;
    }
    */
}
