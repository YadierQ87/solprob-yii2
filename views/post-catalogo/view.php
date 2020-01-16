<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PostCatalogo */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-catalogo-view">

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
            'title',
            'id_catalogo_service',
            'content:ntext',
            'active_status',
            'excerpt',
            'date_publish',
            'date_create',
            'date_update',
            'name_author',
            'id_sec_user',
            'comment_count',
            'visitors_count',
            'img_header',
            'add_styles:ntext',
            'tipo_post',
            'status',
        ],
    ]) ?>

</div>
