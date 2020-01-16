<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RatingCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rating Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rating Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_post_catalogo',
            'valoracion:ntext',
            'puntos',
            'id_user',
            //'nombre_usuario',
            //'date_create',
            //'active',
            //'email:email',
            //'date_update',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
