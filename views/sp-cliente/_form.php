<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpCliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telf_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ci_cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'id_sec_user_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
