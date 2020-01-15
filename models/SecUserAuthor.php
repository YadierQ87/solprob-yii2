<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sec_user_author".
 *
 * @property int $id
 * @property string $username
 * @property string $passwd
 * @property string $salt
 * @property string $img_icono
 * @property string $description
 * @property string $contacto_telf
 * @property string $contacto_mail
 * @property string $titulo_user
 * @property string $web_page_url
 * @property resource $picture
 * @property string $date_create
 * @property int $is_active
 * @property string $full_name
 */
class SecUserAuthor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sec_user_author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'passwd', 'salt', 'img_icono', 'description', 'contacto_telf', 'contacto_mail', 'titulo_user', 'date_create', 'is_active', 'full_name'], 'required'],
            [['img_icono', 'description', 'picture'], 'string'],
            [['date_create'], 'safe'],
            [['is_active'], 'integer'],
            [['username', 'passwd', 'salt', 'contacto_telf', 'contacto_mail', 'titulo_user', 'web_page_url', 'full_name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'passwd' => 'Passwd',
            'salt' => 'Salt',
            'img_icono' => 'Img Icono',
            'description' => 'Description',
            'contacto_telf' => 'Contacto Telf',
            'contacto_mail' => 'Contacto Mail',
            'titulo_user' => 'Titulo User',
            'web_page_url' => 'Web Page Url',
            'picture' => 'Picture',
            'date_create' => 'Date Create',
            'is_active' => 'Is Active',
            'full_name' => 'Full Name',
        ];
    }
}
