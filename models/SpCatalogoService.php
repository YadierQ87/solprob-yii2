<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_catalogo_service".
 *
 * @property int $id
 * @property string $name_service
 * @property string $tags_servicio
 * @property int $id_cliente
 * @property string $telf_servicio
 * @property string $contacto_servicio
 * @property string $email_contacto
 * @property string $address
 * @property string $date_create
 * @property string $date_update
 * @property int $id_sec_user_update
 * @property string $paginas_web
 * @property int $active
 * @property string $description
 * @property int $id_categoria
 * @property double $precio_min
 * @property double $precio_max
 * @property string $tipo_empresa
 * @property string $plantilla_web
 * @property int $id_provincia
 * @property int $id_municipio
 * @property int $id_localidad
 * @property string $country
 * @property int $latd_gmaps
 * @property int $long_gmaps
 * @property int $id_post_blog
 * @property int $id_contrato_activo
 */
class SpCatalogoService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_catalogo_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_service', 'tags_servicio', 'id_cliente', 'telf_servicio', 'contacto_servicio', 'address', 'date_create', 'date_update', 'id_sec_user_update', 'active', 'description', 'id_categoria', 'precio_min', 'precio_max', 'tipo_empresa', 'plantilla_web', 'id_provincia', 'id_municipio', 'id_localidad', 'country', 'id_post_blog', 'id_contrato_activo'], 'required'],
            [['id_cliente', 'id_sec_user_update', 'active', 'id_categoria', 'id_provincia', 'id_municipio', 'id_localidad', 'latd_gmaps', 'long_gmaps', 'id_post_blog', 'id_contrato_activo'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
            [['paginas_web', 'description', 'tipo_empresa', 'plantilla_web'], 'string'],
            [['precio_min', 'precio_max'], 'number'],
            [['name_service', 'telf_servicio', 'contacto_servicio', 'email_contacto', 'address', 'country'], 'string', 'max' => 80],
            [['tags_servicio'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_service' => 'Name Service',
            'tags_servicio' => 'Tags Servicio',
            'id_cliente' => 'Id Cliente',
            'telf_servicio' => 'Telf Servicio',
            'contacto_servicio' => 'Contacto Servicio',
            'email_contacto' => 'Email Contacto',
            'address' => 'Address',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'id_sec_user_update' => 'Id Sec User Update',
            'paginas_web' => 'Paginas Web',
            'active' => 'Active',
            'description' => 'Description',
            'id_categoria' => 'Id Categoria',
            'precio_min' => 'Precio Min',
            'precio_max' => 'Precio Max',
            'tipo_empresa' => 'Tipo Empresa',
            'plantilla_web' => 'Plantilla Web',
            'id_provincia' => 'Id Provincia',
            'id_municipio' => 'Id Municipio',
            'id_localidad' => 'Id Localidad',
            'country' => 'Country',
            'latd_gmaps' => 'Latd Gmaps',
            'long_gmaps' => 'Long Gmaps',
            'id_post_blog' => 'Id Post Blog',
            'id_contrato_activo' => 'Id Contrato Activo',
        ];
    }
}
