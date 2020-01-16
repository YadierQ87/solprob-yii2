<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCatalogoService */

$this->title = 'Update Sp Catalogo Service: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sp Catalogo Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sp-catalogo-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
