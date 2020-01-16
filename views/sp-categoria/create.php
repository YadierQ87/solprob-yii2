<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpCategoria */

$this->title = 'Create Sp Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Sp Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
