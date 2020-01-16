<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpCatalogoServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sp-catalogo-service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_service') ?>

    <?= $form->field($model, 'tags_servicio') ?>

    <?= $form->field($model, 'id_cliente') ?>

    <?= $form->field($model, 'telf_servicio') ?>

    <?php // echo $form->field($model, 'contacto_servicio') ?>

    <?php // echo $form->field($model, 'email_contacto') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'date_create') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <?php // echo $form->field($model, 'id_sec_user_update') ?>

    <?php // echo $form->field($model, 'paginas_web') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'id_categoria') ?>

    <?php // echo $form->field($model, 'precio_min') ?>

    <?php // echo $form->field($model, 'precio_max') ?>

    <?php // echo $form->field($model, 'tipo_empresa') ?>

    <?php // echo $form->field($model, 'plantilla_web') ?>

    <?php // echo $form->field($model, 'id_provincia') ?>

    <?php // echo $form->field($model, 'id_municipio') ?>

    <?php // echo $form->field($model, 'id_localidad') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'latd_gmaps') ?>

    <?php // echo $form->field($model, 'long_gmaps') ?>

    <?php // echo $form->field($model, 'id_post_blog') ?>

    <?php // echo $form->field($model, 'id_contrato_activo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
