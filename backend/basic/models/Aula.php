<?php

namespace app\models;

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
class Aula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'ubicacion'], 'required'],
            [['cart_proyector', 'aforo'], 'default', 'value' => null],
            [['cart_proyector', 'aforo'], 'integer'],
            [['es_climatizada'], 'boolean'],
            [['descripcion', 'ubicacion'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
            'ubicacion' => 'Ubicacion',
            'cart_proyector' => 'Cart Proyector',
            'aforo' => 'Aforo',
            'es_climatizada' => 'Es Climatizada',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery|ReservaQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['id_aula' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return AulaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AulaQuery(get_called_class());
    }
}
