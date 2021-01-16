<?php

use yii\db\Migration;

/**
 * Class m210116_145913_randevu
 */
class m210116_145913_randevu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/randevu.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}

        $sql = file_get_contents(__DIR__ . '/hasta.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210116_145913_randevu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_145913_randevu cannot be reverted.\n";

        return false;
    }
    */
}
