<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%horario_materia}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%materia}}`
 * - `{{%reserva}}`
 */
class m220719_143251_create_horario_materia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%horario_materia}}', [
            'id' => $this->primaryKey(),
            'id_materia' => $this->integer()->notNull(),
            'id_reserva' => $this->integer()->notNull(),
            'fh_desde' => $this->timestamp(),
            'fh_hasta' => $this->timestamp(),
        ]);

        // creates index for column `id_materia`
        $this->createIndex(
            '{{%idx-horario_materia-id_materia}}',
            '{{%horario_materia}}',
            'id_materia'
        );

        // add foreign key for table `{{%materia}}`
        $this->addForeignKey(
            '{{%fk-horario_materia-id_materia}}',
            '{{%horario_materia}}',
            'id_materia',
            '{{%materia}}',
            'id',
            'CASCADE'
        );

        // creates index for column `id_reserva`
        $this->createIndex(
            '{{%idx-horario_materia-id_reserva}}',
            '{{%horario_materia}}',
            'id_reserva'
        );

        // add foreign key for table `{{%reserva}}`
        $this->addForeignKey(
            '{{%fk-horario_materia-id_reserva}}',
            '{{%horario_materia}}',
            'id_reserva',
            '{{%reserva}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%materia}}`
        $this->dropForeignKey(
            '{{%fk-horario_materia-id_materia}}',
            '{{%horario_materia}}'
        );

        // drops index for column `id_materia`
        $this->dropIndex(
            '{{%idx-horario_materia-id_materia}}',
            '{{%horario_materia}}'
        );

        // drops foreign key for table `{{%reserva}}`
        $this->dropForeignKey(
            '{{%fk-horario_materia-id_reserva}}',
            '{{%horario_materia}}'
        );

        // drops index for column `id_reserva`
        $this->dropIndex(
            '{{%idx-horario_materia-id_reserva}}',
            '{{%horario_materia}}'
        );

        $this->dropTable('{{%horario_materia}}');
    }
}
