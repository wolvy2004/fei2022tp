<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%carrera}}`.
 */
class m220719_140031_create_carrera_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%carrera}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notnull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%carrera}}');
    }
}
