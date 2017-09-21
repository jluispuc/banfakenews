<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ReportsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reports-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_report') ?>

    <?= $form->field($model, 'fake_news_title') ?>

    <?= $form->field($model, 'possible_text_fake_news') ?>

    <?= $form->field($model, 'url_source_fake_news') ?>

    <?= $form->field($model, 'url_refute') ?>

    <?= $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
