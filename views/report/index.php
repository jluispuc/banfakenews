<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ReportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Levantar Reporte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'id_report', 'label' => 'ID'],
            ['attribute' => 'fake_news_title', 'label' => 'Título'],
            ['attribute' => 'url_source_fake_news', 'label' => 'URL o Red Social'],
            ['attribute' => 'url_refute', 'label' => 'URL que Refuta'],
            ['attribute' => 'created_at', 'label' => 'Fecha de Reporte'],
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{false} {dontFalse}',
                'buttons' => [
                    'false' => function ($url, $model, $key){
                        $false = ($model->false == null) ? 0 : $model->false;

                        return Html::a(
                                '<button type="button" class="btn btn-danger"> '. $false . ' + </button>',
                                ['report/voting-false', 'id' => $model->id_report]
                        );
                    },
                    'dontFalse' => function ($url, $model, $key){
                        $dontFalse = ($model->dont_false == null) ? 0 : $model->dont_false;
                        
                        return Html::a(
                            '<button type="button" class="btn btn-secondary"> '. $dontFalse . ' - </button>',
                            ['report/voting-dont-false', 'id' => $model->id_report]
                        );
                    }
                ]


            ],
        ],
    ]); ?>
</div>
