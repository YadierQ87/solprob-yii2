<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RatingComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rating-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_post_catalogo')->textInput() ?>

    <?= $form->field($model, 'valoracion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'puntos')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'nombre_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Revisado' => 'Revisado', 'Aprobado' => 'Aprobado', 'Desactivado' => 'Desactivado', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
