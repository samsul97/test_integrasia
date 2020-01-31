<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Sold;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GpsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gps-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('TAMBAH GPS', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'header' => 'No',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'contentOptions' => ['style' => 'text-align:center']

                ],

                // 'id',
                'brand',
                'model',
                'nama',
                'garansi',
                'tgl_beli',
                'tgl_jual',
                // 'sold',
                [
                    'attribute' => 'sold',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'filter' => Sold::getList(),
                    'contentOptions' => ['style' =>'text-align:center;'],
                    'value' => function ($data) {
                        $model = Sold::findOne(['id' => $data->sold]);
                        return $model->name;
                    }
                ],
                'deskripsi:ntext',

                [
                    'attribute' => 'foto',
                    'format' => 'raw',
                    'value' => function ($model) {
                        if ($model->foto != '') {
                            return Html::img('@web/images/' . $model->foto, ['class' => 'img-responsive', 'style' => 'height:80px']);
                        } else { 
                            return '<div align="center"><h1>No Image</h1></div>';
                        }
                    },
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
    </div>
</div>
