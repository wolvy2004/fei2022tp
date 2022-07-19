<?php

namespace app\modules\apiv1\models;

use Yii;

/**
 * This is the model class for table "horario_materia".
 *
 * @property int $id
 * @property int $id_materia
 * @property int $id_reserva
 * @property string|null $fh_desde
 * @property string|null $fh_hasta
 *
 * @property Materia $materia
 * @property Reserva $reserva
 */
class HorarioMateria extends \app\models\Materia
{
   
}
