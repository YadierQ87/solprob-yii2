<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpCatalogoServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sp Catalogo Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-catalogo-service-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sp Catalogo Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_service',
            'tags_servicio',
            'id_cliente',
            'telf_servicio',
            //'contacto_servicio',
            //'email_contacto:email',
            //'address',
            //'date_create',
            //'date_update',
            //'id_sec_user_update',
            //'paginas_web:ntext',
            //'active',
            //'description:ntext',
            //'id_categoria',
            //'precio_min',
            //'precio_max',
            //'tipo_empresa',
            //'plantilla_web',
            //'id_provincia',
            //'id_municipio',
            //'id_localidad',
            //'country',
            //'latd_gmaps',
            //'long_gmaps',
            //'id_post_blog',
            //'id_contrato_activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
