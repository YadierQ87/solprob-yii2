<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocProvincia */

$this->title = 'Create Loc Provincia';
$this->params['breadcrumbs'][] = ['label' => 'Loc Provincias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loc-provincia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
