<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpContrato;

/**
 * SpContratoSearch represents the model behind the search form of `app\models\SpContrato`.
 */
class SpContratoSearch extends SpContrato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_catalogo_service', 'id_cliente', 'id_user_create', 'active', 'meses_contratados', 'cobrado', 'id_nivel_contrato'], 'integer'],
            [['date_create', 'date_update', 'date_end', 'moneda'], 'safe'],
            [['total_pago'], 'number'],
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
        $query = SpContrato::find();

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
            'id_cliente' => $this->id_cliente,
            'id_user_create' => $this->id_user_create,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'active' => $this->active,
            'meses_contratados' => $this->meses_contratados,
            'date_end' => $this->date_end,
            'cobrado' => $this->cobrado,
            'total_pago' => $this->total_pago,
            'id_nivel_contrato' => $this->id_nivel_contrato,
        ]);

        $query->andFilterWhere(['like', 'moneda', $this->moneda]);

        return $dataProvider;
    }
}
