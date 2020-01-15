<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sp_categoria".
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property resource $img_blob
 * @property string $description
 * @property string $img_icon
 * @property string $tags_categoria
 */
class SpCategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tags_categoria'], 'required'],
            [['parent_id'], 'integer'],
            [['img_blob', 'description', 'img_icon'], 'string'],
            [['name'], 'string', 'max' => 80],
            [['tags_categoria'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
            'img_blob' => 'Img Blob',
            'description' => 'Description',
            'img_icon' => 'Img Icon',
            'tags_categoria' => 'Tags Categoria',
        ];
    }
}
