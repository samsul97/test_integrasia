<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GpsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gps-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Gps', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'brand',
                'model',
                'nama',
                'garansi',
                // 'tgl_beli',
                // 'tgl_jual',
                // 'dijual_ke',
                // 'deskripsi:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
