<?php

namespace app\modules\apiv1\models;

use Yii;

/**
 * This is the model class for table "aula".
 *
 * @property int $id
 * @property string $descripcion
 * @property string $ubicacion
 * @property int|null $cart_proyector
 * @property int|null $aforo
 * @property bool|null $es_climatizada
 *
 * @property Reserva[] $reservas
 */
class Aula extends \app\models\Aula
{
   
}
