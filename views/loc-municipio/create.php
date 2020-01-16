<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LocMunicipio */

$this->title = 'Create Loc Municipio';
$this->params['breadcrumbs'][] = ['label' => 'Loc Municipios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loc-municipio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
