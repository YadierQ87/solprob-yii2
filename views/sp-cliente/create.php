<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCliente */

$this->title = 'Create Sp Cliente';
$this->params['breadcrumbs'][] = ['label' => 'Sp Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-cliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
