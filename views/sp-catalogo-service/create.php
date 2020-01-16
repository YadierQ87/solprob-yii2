<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCatalogoService */

$this->title = 'Create Sp Catalogo Service';
$this->params['breadcrumbs'][] = ['label' => 'Sp Catalogo Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-catalogo-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
