<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SecUserAuthor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sec User Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sec-user-author-view">

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
            'username',
            'passwd',
            'salt',
            'img_icono',
            'description:ntext',
            'contacto_telf',
            'contacto_mail',
            'titulo_user',
            'web_page_url:url',
            'picture',
            'date_create',
            'is_active',
            'full_name',
        ],
    ]) ?>

</div>
