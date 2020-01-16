<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RatingComment */

$this->title = 'Update Rating Comment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rating Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rating-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
