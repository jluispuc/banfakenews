<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use kartik\social\FacebookPlugin;

$this->title = 'Registro';
$this->params['breadcrumbs'][] = $this->title;
FacebookPlugin::widget(['appId'=>'619713981749419']);
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Ingresa los siguientes campos para registrarte:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'layout' => 'horizontal']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Nombre de Usuario') ?>

                <?= $form->field($model, 'email')->label('Correo Electrónico') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>

                <div class="form-group text-center">
                    <?= Html::submitButton('Regístrate', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    <?php
                        
                            $social = Yii::$app->getModule('social');
                            $callback = Url::toRoute(['/site/validate-fb', 'src' => 'register'], true); // or any absolute url you want to redirect
                            echo $social->getFbLoginLink($callback, ['class'=>'btn btn-primary']);
                        
                    ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
