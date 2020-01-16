<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SecUserAuthor */

$this->title = 'Create Sec User Author';
$this->params['breadcrumbs'][] = ['label' => 'Sec User Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sec-user-author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
