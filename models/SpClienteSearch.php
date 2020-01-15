<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpCliente;

/**
 * SpClienteSearch represents the model behind the search form of `app\models\SpCliente`.
 */
class SpClienteSearch extends SpCliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_sec_user_update'], 'integer'],
            [['full_name', 'email_cliente', 'telf_cliente', 'direccion_cliente', 'ci_cliente', 'date_create', 'date_update'], 'safe'],
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
        $query = SpCliente::find();

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
            'date_update' => $this->date_update,
            'id_sec_user_update' => $this->id_sec_user_update,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'email_cliente', $this->email_cliente])
            ->andFilterWhere(['like', 'telf_cliente', $this->telf_cliente])
            ->andFilterWhere(['like', 'direccion_cliente', $this->direccion_cliente])
            ->andFilterWhere(['like', 'ci_cliente', $this->ci_cliente]);

        return $dataProvider;
    }
}
