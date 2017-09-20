<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */

$this->title = 'Actualizar Reporte: ' . $model->id_report;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_report, 'url' => ['view', 'id' => $model->id_report]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="reports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
