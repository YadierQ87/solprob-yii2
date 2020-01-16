<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpCategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sp Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sp Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'parent_id',
            'img_blob',
            'description:ntext',
            //'img_icon',
            //'tags_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
