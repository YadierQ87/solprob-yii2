<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCategoria */

$this->title = 'Update Sp Categoria: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sp Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sp-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
