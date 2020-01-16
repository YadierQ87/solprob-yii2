<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SecUserAuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sec User Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sec-user-author-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sec User Author', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'passwd',
            'salt',
            'img_icono',
            //'description:ntext',
            //'contacto_telf',
            //'contacto_mail',
            //'titulo_user',
            //'web_page_url:url',
            //'picture',
            //'date_create',
            //'is_active',
            //'full_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
