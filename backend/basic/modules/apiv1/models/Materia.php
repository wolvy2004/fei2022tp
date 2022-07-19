<?php

namespace app\modules\apiv1\models;

use Yii;

/**
 * This is the model class for table "materia".
 *
 * @property int $id
 * @property string $nombre
 * @property int $cant_alumnos
 * @property int $id_carrera
 * @property int $id_profesor
 *
 * @property Carrera $carrera
 * @property HorarioMateria[] $horarioMaterias
 * @property Profesor $profesor
 */
class Materia extends \app\models\Materia
{
    
}
