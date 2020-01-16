<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocLocalidad */

$this->title = 'Update Loc Localidad: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Loc Localidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loc-localidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
