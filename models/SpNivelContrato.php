<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_nivel_contrato".
 *
 * @property int $id
 * @property string $level_name
 * @property string $description
 * @property string $categoria_name
 * @property string $beneficios
 * @property int $costo_inscripcion
 */
class SpNivelContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_nivel_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_name', 'description', 'categoria_name', 'beneficios', 'costo_inscripcion'], 'required'],
            [['description', 'beneficios'], 'string'],
            [['costo_inscripcion'], 'integer'],
            [['level_name', 'categoria_name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_name' => 'Level Name',
            'description' => 'Description',
            'categoria_name' => 'Categoria Name',
            'beneficios' => 'Beneficios',
            'costo_inscripcion' => 'Costo Inscripcion',
        ];
    }
}
