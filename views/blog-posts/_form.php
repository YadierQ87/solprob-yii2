<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BlogPosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_sec_user_create')->textInput() ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_post')->dropDownList([ 'Concurso' => 'Concurso', 'Encuesta' => 'Encuesta', 'Util' => 'Util', 'Evaluacion' => 'Evaluacion', 'Certificado' => 'Certificado', 'Noticia' => 'Noticia', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'img_web')->textInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'date_publish')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'En Revision' => 'En Revision', 'Publico' => 'Publico', 'Borrador' => 'Borrador', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
