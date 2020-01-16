<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LocLocalidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loc Localidads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loc-localidad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Loc Localidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'name',
            'id_municipio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
