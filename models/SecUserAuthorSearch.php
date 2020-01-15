<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SecUserAuthor;

/**
 * SecUserAuthorSearch represents the model behind the search form of `app\models\SecUserAuthor`.
 */
class SecUserAuthorSearch extends SecUserAuthor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_active'], 'integer'],
            [['username', 'passwd', 'salt', 'img_icono', 'description', 'contacto_telf', 'contacto_mail', 'titulo_user', 'web_page_url', 'picture', 'date_create', 'full_name'], 'safe'],
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
        $query = SecUserAuthor::find();

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
            'date_create' => $this->date_create,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'passwd', $this->passwd])
            ->andFilterWhere(['like', 'salt', $this->salt])
            ->andFilterWhere(['like', 'img_icono', $this->img_icono])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'contacto_telf', $this->contacto_telf])
            ->andFilterWhere(['like', 'contacto_mail', $this->contacto_mail])
            ->andFilterWhere(['like', 'titulo_user', $this->titulo_user])
            ->andFilterWhere(['like', 'web_page_url', $this->web_page_url])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'full_name', $this->full_name]);

        return $dataProvider;
    }
}
