<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reports */

$this->title = $model->id_report;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_report], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_report], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar tu reporte?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'ID',
                'value' => $model->id_report,
            ],
            [
                'label' => 'Título',
                'value' => $model->fake_news_title,
            ],
            [
                'label' => 'Texto de la Noticia',
                'value' => $model->possible_text_fake_news,
            ],
            [
                'label' => 'URL o Red Social',
                'value' => $model->url_source_fake_news,
            ],
            [
                'label' => 'Fecha de Emisión del Reporte',
                'value' => $model->created_at,
            ],
            [
                'label' => 'Fecha de Última Actualización del Reporte',
                'value' => $model->updated_at,
            ],
        ],
    ]) ?>

</div>
