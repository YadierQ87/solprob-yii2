<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostCatalogo */

$this->title = 'Create Post Catalogo';
$this->params['breadcrumbs'][] = ['label' => 'Post Catalogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-catalogo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
