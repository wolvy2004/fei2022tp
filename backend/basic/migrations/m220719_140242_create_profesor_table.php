<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profesor}}`.
 */
class m220719_140242_create_profesor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%profesor}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(128)->notNull(),
            'apellido' => $this->string(128)->notNull(),
            'mostrar' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%profesor}}');
    }
}
