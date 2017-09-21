<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reports-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'fake_news_title')->textInput(['maxlength' => true])->label('Título de la Noticia') ?>

    <?= $form->field($model, 'possible_text_fake_news')->textArea(['maxlength' => true])->label('Posible Texto') ?>

    <?= $form->field($model, 'url_source_fake_news')->textInput(['maxlength' => true])->label('URL o Red Social de Origen') ?>

    <?= $form->field($model, 'url_refute')->textInput(['maxlength' => true])->label('URL que refuta la Noticia') ?>

    <div class="form-group text-center">
        <?= Html::submitButton($model->isNewRecord ? 'Levantar Reporte' : 'Actualizar Reporte', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
