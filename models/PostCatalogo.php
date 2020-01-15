<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_catalogo".
 *
 * @property int $id
 * @property string $title
 * @property int $id_catalogo_service
 * @property string $content
 * @property int $active_status
 * @property string $excerpt
 * @property string $date_publish
 * @property string $date_create
 * @property string $date_update
 * @property string $name_author
 * @property int $id_sec_user
 * @property int $comment_count
 * @property int $visitors_count
 * @property resource $img_header
 * @property string $add_styles
 * @property string $tipo_post
 * @property string $status
 */
class PostCatalogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_catalogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'id_catalogo_service', 'content', 'active_status', 'excerpt', 'date_publish', 'date_create', 'date_update', 'name_author', 'id_sec_user', 'comment_count', 'img_header', 'tipo_post', 'status'], 'required'],
            [['id_catalogo_service', 'active_status', 'id_sec_user', 'comment_count', 'visitors_count'], 'integer'],
            [['content', 'img_header', 'add_styles', 'tipo_post', 'status'], 'string'],
            [['date_publish', 'date_create', 'date_update'], 'safe'],
            [['title', 'name_author'], 'string', 'max' => 80],
            [['excerpt'], 'string', 'max' => 100],
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
            'id_catalogo_service' => 'Id Catalogo Service',
            'content' => 'Content',
            'active_status' => 'Active Status',
            'excerpt' => 'Excerpt',
            'date_publish' => 'Date Publish',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'name_author' => 'Name Author',
            'id_sec_user' => 'Id Sec User',
            'comment_count' => 'Comment Count',
            'visitors_count' => 'Visitors Count',
            'img_header' => 'Img Header',
            'add_styles' => 'Add Styles',
            'tipo_post' => 'Tipo Post',
            'status' => 'Status',
        ];
    }
}
