<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SpCatalogoService */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sp Catalogo Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sp-catalogo-service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_service',
            'tags_servicio',
            'id_cliente',
            'telf_servicio',
            'contacto_servicio',
            'email_contacto:email',
            'address',
            'date_create',
            'date_update',
            'id_sec_user_update',
            'paginas_web:ntext',
            'active',
            'description:ntext',
            'id_categoria',
            'precio_min',
            'precio_max',
            'tipo_empresa',
            'plantilla_web',
            'id_provincia',
            'id_municipio',
            'id_localidad',
            'country',
            'latd_gmaps',
            'long_gmaps',
            'id_post_blog',
            'id_contrato_activo',
        ],
    ]) ?>

</div>
