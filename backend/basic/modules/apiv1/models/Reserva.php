<?php

namespace app\modules\apiv1\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $id
 * @property int $id_aula
 * @property string $fh_desde
 * @property string $fh_hasta
 * @property string|null $observacion
 *
 * @property Aula $aula
 * @property HorarioMateria[] $horarioMaterias
 */
class Reserva extends \app\models\Reserva
{
    
}
