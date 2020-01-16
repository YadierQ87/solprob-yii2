<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostCatalogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-catalogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_catalogo_service')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active_status')->textInput() ?>

    <?= $form->field($model, 'excerpt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_publish')->textInput() ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'name_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sec_user')->textInput() ?>

    <?= $form->field($model, 'comment_count')->textInput() ?>

    <?= $form->field($model, 'visitors_count')->textInput() ?>

    <?= $form->field($model, 'img_header')->textInput() ?>

    <?= $form->field($model, 'add_styles')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipo_post')->dropDownList([ 'Catalogo' => 'Catalogo', 'Evento' => 'Evento', 'Promocion' => 'Promocion', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'En Revision' => 'En Revision', 'Publico' => 'Publico', 'Borrador' => 'Borrador', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
