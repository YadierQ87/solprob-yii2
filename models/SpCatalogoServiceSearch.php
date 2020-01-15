<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpCatalogoService;

/**
 * SpCatalogoServiceSearch represents the model behind the search form of `app\models\SpCatalogoService`.
 */
class SpCatalogoServiceSearch extends SpCatalogoService
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_cliente', 'id_sec_user_update', 'active', 'id_categoria', 'id_provincia', 'id_municipio', 'id_localidad', 'latd_gmaps', 'long_gmaps', 'id_post_blog', 'id_contrato_activo'], 'integer'],
            [['name_service', 'tags_servicio', 'telf_servicio', 'contacto_servicio', 'email_contacto', 'address', 'date_create', 'date_update', 'paginas_web', 'description', 'tipo_empresa', 'plantilla_web', 'country'], 'safe'],
            [['precio_min', 'precio_max'], 'number'],
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
        $query = SpCatalogoService::find();

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
            'id_cliente' => $this->id_cliente,
            'date_create' => $this->date_create,
            'date_update' => $this->date_update,
            'id_sec_user_update' => $this->id_sec_user_update,
            'active' => $this->active,
            'id_categoria' => $this->id_categoria,
            'precio_min' => $this->precio_min,
            'precio_max' => $this->precio_max,
            'id_provincia' => $this->id_provincia,
            'id_municipio' => $this->id_municipio,
            'id_localidad' => $this->id_localidad,
            'latd_gmaps' => $this->latd_gmaps,
            'long_gmaps' => $this->long_gmaps,
            'id_post_blog' => $this->id_post_blog,
            'id_contrato_activo' => $this->id_contrato_activo,
        ]);

        $query->andFilterWhere(['like', 'name_service', $this->name_service])
            ->andFilterWhere(['like', 'tags_servicio', $this->tags_servicio])
            ->andFilterWhere(['like', 'telf_servicio', $this->telf_servicio])
            ->andFilterWhere(['like', 'contacto_servicio', $this->contacto_servicio])
            ->andFilterWhere(['like', 'email_contacto', $this->email_contacto])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'paginas_web', $this->paginas_web])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'tipo_empresa', $this->tipo_empresa])
            ->andFilterWhere(['like', 'plantilla_web', $this->plantilla_web])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
