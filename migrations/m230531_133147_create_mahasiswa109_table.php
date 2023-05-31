<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa109}}`.
 */
class m230531_133147_create_mahasiswa109_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa109}}', [
            'id109' => $this->primaryKey(),
            'nim109' =>$this->string()->notNull(),
            'nama109' =>$this->string()->notNull(),
            'kelas109' =>$this->string()->notNull(),
            'status109' =>$this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa109}}');
    }
}
