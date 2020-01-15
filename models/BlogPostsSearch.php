<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BlogPosts;

/**
 * BlogPostsSearch represents the model behind the search form of `app\models\BlogPosts`.
 */
class BlogPostsSearch extends BlogPosts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_sec_user_create', 'active'], 'integer'],
            [['title', 'contenido', 'author_name', 'tipo_post', 'img_web', 'date_create', 'date_update', 'date_publish', 'status'], 'safe'],
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
        $query = BlogPosts::find();

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
            'id_sec_user_create' => $this->id_sec_user_create,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'date_publish' => $this->date_publish,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'contenido', $this->contenido])
            ->andFilterWhere(['like', 'author_name', $this->author_name])
            ->andFilterWhere(['like', 'tipo_post', $this->tipo_post])
            ->andFilterWhere(['like', 'img_web', $this->img_web])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
