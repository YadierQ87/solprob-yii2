<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_contrato".
 *
 * @property int $id
 * @property int $id_catalogo_service
 * @property int $id_cliente
 * @property int $id_user_create
 * @property string $date_create
 * @property string $date_update
 * @property int $active
 * @property int $meses_contratados
 * @property string $date_end
 * @property int $cobrado
 * @property double $total_pago
 * @property string $moneda
 * @property int $id_nivel_contrato
 */
class SpContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_catalogo_service', 'id_cliente', 'id_user_create', 'date_create', 'date_update', 'active', 'meses_contratados', 'date_end', 'cobrado', 'total_pago', 'moneda', 'id_nivel_contrato'], 'required'],
            [['id_catalogo_service', 'id_cliente', 'id_user_create', 'active', 'meses_contratados', 'cobrado', 'id_nivel_contrato'], 'integer'],
            [['date_create', 'date_update', 'date_end'], 'safe'],
            [['total_pago'], 'number'],
            [['moneda'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_catalogo_service' => 'Id Catalogo Service',
            'id_cliente' => 'Id Cliente',
            'id_user_create' => 'Id User Create',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'active' => 'Active',
            'meses_contratados' => 'Meses Contratados',
            'date_end' => 'Date End',
            'cobrado' => 'Cobrado',
            'total_pago' => 'Total Pago',
            'moneda' => 'Moneda',
            'id_nivel_contrato' => 'Id Nivel Contrato',
        ];
    }
}
