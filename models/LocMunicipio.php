<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loc_municipio".
 *
 * @property int $id
 * @property int $id_provincia
 * @property string $name
 * @property string $code
 */
class LocMunicipio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loc_municipio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_provincia', 'name', 'code'], 'required'],
            [['id_provincia'], 'integer'],
            [['name', 'code'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_provincia' => 'Id Provincia',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
