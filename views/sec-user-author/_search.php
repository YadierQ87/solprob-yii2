<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SecUserAuthorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sec-user-author-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'passwd') ?>

    <?= $form->field($model, 'salt') ?>

    <?= $form->field($model, 'img_icono') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'contacto_telf') ?>

    <?php // echo $form->field($model, 'contacto_mail') ?>

    <?php // echo $form->field($model, 'titulo_user') ?>

    <?php // echo $form->field($model, 'web_page_url') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'full_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
