<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpNivelContrato;

/**
 * SpNivelContratoSearch represents the model behind the search form of `app\models\SpNivelContrato`.
 */
class SpNivelContratoSearch extends SpNivelContrato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'costo_inscripcion'], 'integer'],
            [['level_name', 'description', 'categoria_name', 'beneficios'], 'safe'],
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
        $query = SpNivelContrato::find();

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
            'costo_inscripcion' => $this->costo_inscripcion,
        ]);

        $query->andFilterWhere(['like', 'level_name', $this->level_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'categoria_name', $this->categoria_name])
            ->andFilterWhere(['like', 'beneficios', $this->beneficios]);

        return $dataProvider;
    }
}
