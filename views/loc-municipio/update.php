<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocMunicipio */

$this->title = 'Update Loc Municipio: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Loc Municipios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loc-municipio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
