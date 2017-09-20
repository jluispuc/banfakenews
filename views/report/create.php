<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Reports */

$this->title = 'Levantar Reporte';
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
