<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogPostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blog Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-posts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Blog Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'contenido:ntext',
            'id_sec_user_create',
            'author_name',
            //'tipo_post',
            //'img_web',
            //'date_create',
            //'date_update',
            //'date_publish',
            //'active',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
