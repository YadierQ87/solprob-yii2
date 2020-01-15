<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RatingComment;

/**
 * RatingCommentSearch represents the model behind the search form of `app\models\RatingComment`.
 */
class RatingCommentSearch extends RatingComment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_post_catalogo', 'puntos', 'id_user', 'active'], 'integer'],
            [['valoracion', 'nombre_usuario', 'date_create', 'email', 'date_update', 'status'], 'safe'],
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
        $query = RatingComment::find();

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
            'id_post_catalogo' => $this->id_post_catalogo,
            'puntos' => $this->puntos,
            'id_user' => $this->id_user,
            'date_create' => $this->date_create,
            'active' => $this->active,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'valoracion', $this->valoracion])
            ->andFilterWhere(['like', 'nombre_usuario', $this->nombre_usuario])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
