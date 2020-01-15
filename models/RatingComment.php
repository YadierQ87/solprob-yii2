<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating_comment".
 *
 * @property int $id
 * @property int $id_post_catalogo
 * @property string $valoracion
 * @property int $puntos
 * @property int $id_user
 * @property string $nombre_usuario
 * @property string $date_create
 * @property int $active
 * @property string $email
 * @property string $date_update
 * @property string $status
 */
class RatingComment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_post_catalogo', 'valoracion', 'puntos', 'nombre_usuario', 'date_create', 'active', 'email', 'date_update', 'status'], 'required'],
            [['id_post_catalogo', 'puntos', 'id_user', 'active'], 'integer'],
            [['valoracion', 'status'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['nombre_usuario', 'email'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_post_catalogo' => 'Id Post Catalogo',
            'valoracion' => 'Valoracion',
            'puntos' => 'Puntos',
            'id_user' => 'Id User',
            'nombre_usuario' => 'Nombre Usuario',
            'date_create' => 'Date Create',
            'active' => 'Active',
            'email' => 'Email',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }
}
