<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCliente */

$this->title = 'Update Sp Cliente: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sp Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sp-cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
