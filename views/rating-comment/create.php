<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RatingComment */

$this->title = 'Create Rating Comment';
$this->params['breadcrumbs'][] = ['label' => 'Rating Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
