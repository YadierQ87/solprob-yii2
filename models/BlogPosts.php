<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_posts".
 *
 * @property int $id
 * @property string $title
 * @property string $contenido
 * @property int $id_sec_user_create
 * @property string $author_name
 * @property string $tipo_post
 * @property resource $img_web
 * @property string $date_create
 * @property string $date_update
 * @property string $date_publish
 * @property int $active
 * @property string $status
 */
class BlogPosts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'contenido', 'id_sec_user_create', 'author_name', 'tipo_post', 'img_web', 'date_create', 'active', 'status'], 'required'],
            [['contenido', 'tipo_post', 'img_web', 'status'], 'string'],
            [['id_sec_user_create', 'active'], 'integer'],
            [['date_create', 'date_update', 'date_publish'], 'safe'],
            [['title', 'author_name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'contenido' => 'Contenido',
            'id_sec_user_create' => 'Id Sec User Create',
            'author_name' => 'Author Name',
            'tipo_post' => 'Tipo Post',
            'img_web' => 'Img Web',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'date_publish' => 'Date Publish',
            'active' => 'Active',
            'status' => 'Status',
        ];
    }
}
