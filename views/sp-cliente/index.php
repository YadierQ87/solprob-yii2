<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sp Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sp Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'full_name',
            'email_cliente:email',
            'telf_cliente',
            'direccion_cliente',
            //'ci_cliente',
            //'date_create',
            //'date_update',
            //'id_sec_user_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
