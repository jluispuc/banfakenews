<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\social\Module;
use yii\helpers\Url;
use kartik\social\FacebookPlugin;

$this->title = 'Iniciar Sesión';
$this->params['breadcrumbs'][] = $this->title;

FacebookPlugin::widget(['appId'=>'619713981749419']);
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor llena los campos siguientes para iniciar sesión:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Usuario') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?php
                    $social = Yii::$app->getModule('social');
                    $callback = Url::toRoute(['/site/validate-fb'], true); // or any absolute url you want to redirect
                    echo $social->getFbLoginLink($callback, ['class'=>'btn btn-primary']);
                ?>
            </div>
        </div>

        <div class="form-group">
            ¿No tienes usuario? <a href="/signup">Regístrate aquí</a>
        </div>

    <?php ActiveForm::end(); ?>
</div>
