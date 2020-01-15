<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PostCatalogo;

/**
 * PostCatalogoSearch represents the model behind the search form of `app\models\PostCatalogo`.
 */
class PostCatalogoSearch extends PostCatalogo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_catalogo_service', 'active_status', 'id_sec_user', 'comment_count', 'visitors_count'], 'integer'],
            [['title', 'content', 'excerpt', 'date_publish', 'date_create', 'date_update', 'name_author', 'img_header', 'add_styles', 'tipo_post', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PostCatalogo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_catalogo_service' => $this->id_catalogo_service,
            'active_status' => $this->active_status,
            'date_publish' => $this->date_publish,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'id_sec_user' => $this->id_sec_user,
            'comment_count' => $this->comment_count,
            'visitors_count' => $this->visitors_count,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'excerpt', $this->excerpt])
            ->andFilterWhere(['like', 'name_author', $this->name_author])
            ->andFilterWhere(['like', 'img_header', $this->img_header])
            ->andFilterWhere(['like', 'add_styles', $this->add_styles])
            ->andFilterWhere(['like', 'tipo_post', $this->tipo_post])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
