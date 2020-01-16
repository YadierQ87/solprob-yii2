<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpCatalogoService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-catalogo-service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tags_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_cliente')->textInput() ?>

    <?= $form->field($model, 'telf_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contacto_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_contacto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <?= $form->field($model, 'id_sec_user_update')->textInput() ?>

    <?= $form->field($model, 'paginas_web')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_categoria')->textInput() ?>

    <?= $form->field($model, 'precio_min')->textInput() ?>

    <?= $form->field($model, 'precio_max')->textInput() ?>

    <?= $form->field($model, 'tipo_empresa')->dropDownList([ 'TCP' => 'TCP', 'Privado' => 'Privado', 'Empresa Mixta' => 'Empresa Mixta', 'Empresa Extranjera' => 'Empresa Extranjera', 'Cooperativa' => 'Cooperativa', 'Otros' => 'Otros', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'plantilla_web')->dropDownList([ 'Basic' => 'Basic', 'Avanzada' => 'Avanzada', 'Mejorada' => 'Mejorada', 'VIP' => 'VIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_provincia')->textInput() ?>

    <?= $form->field($model, 'id_municipio')->textInput() ?>

    <?= $form->field($model, 'id_localidad')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latd_gmaps')->textInput() ?>

    <?= $form->field($model, 'long_gmaps')->textInput() ?>

    <?= $form->field($model, 'id_post_blog')->textInput() ?>

    <?= $form->field($model, 'id_contrato_activo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
