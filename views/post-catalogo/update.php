<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostCatalogo */

$this->title = 'Update Post Catalogo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-catalogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
