<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loc_localidad".
 *
 * @property int $id
 * @property int $code
 * @property string $name
 * @property int $id_municipio
 */
class LocLocalidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loc_localidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'id_municipio'], 'required'],
            [['code', 'id_municipio'], 'integer'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'id_municipio' => 'Id Municipio',
        ];
    }
}
