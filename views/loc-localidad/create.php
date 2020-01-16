<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocLocalidad */

$this->title = 'Create Loc Localidad';
$this->params['breadcrumbs'][] = ['label' => 'Loc Localidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loc-localidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
