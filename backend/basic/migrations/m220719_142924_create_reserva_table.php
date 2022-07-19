<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reserva}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%aula}}`
 */
class m220719_142924_create_reserva_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reserva}}', [
            'id' => $this->primaryKey(),
            'id_aula' => $this->integer()->notNull(),
            'fh_desde' => $this->timestamp()->notNull(),
            'fh_hasta' => $this->timestamp()->notNull(),
            'observacion' => $this->text(256),
        ]);

        // creates index for column `id_aula`
        $this->createIndex(
            '{{%idx-reserva-id_aula}}',
            '{{%reserva}}',
            'id_aula'
        );

        // add foreign key for table `{{%aula}}`
        $this->addForeignKey(
            '{{%fk-reserva-id_aula}}',
            '{{%reserva}}',
            'id_aula',
            '{{%aula}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%aula}}`
        $this->dropForeignKey(
            '{{%fk-reserva-id_aula}}',
            '{{%reserva}}'
        );

        // drops index for column `id_aula`
        $this->dropIndex(
            '{{%idx-reserva-id_aula}}',
            '{{%reserva}}'
        );

        $this->dropTable('{{%reserva}}');
    }
}
