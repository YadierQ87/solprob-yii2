<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_cliente".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email_cliente
 * @property string $telf_cliente
 * @property string $direccion_cliente
 * @property string $ci_cliente
 * @property string $date_create
 * @property string $date_update
 * @property int $id_sec_user_update
 */
class SpCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email_cliente', 'telf_cliente', 'direccion_cliente', 'ci_cliente', 'date_create', 'date_update', 'id_sec_user_update'], 'required'],
            [['date_create', 'date_update'], 'safe'],
            [['id_sec_user_update'], 'integer'],
            [['full_name', 'email_cliente', 'telf_cliente', 'direccion_cliente', 'ci_cliente'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email_cliente' => 'Email Cliente',
            'telf_cliente' => 'Telf Cliente',
            'direccion_cliente' => 'Direccion Cliente',
            'ci_cliente' => 'Ci Cliente',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'id_sec_user_update' => 'Id Sec User Update',
        ];
    }
}
