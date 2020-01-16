<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostCatalogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Catalogos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-catalogo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post Catalogo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'id_catalogo_service',
            'content:ntext',
            'active_status',
            //'excerpt',
            //'date_publish',
            //'date_create',
            //'date_update',
            //'name_author',
            //'id_sec_user',
            //'comment_count',
            //'visitors_count',
            //'img_header',
            //'add_styles:ntext',
            //'tipo_post',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
