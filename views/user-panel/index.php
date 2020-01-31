<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserPanelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PENGGUNA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-panel-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('TAMBAH USER', ['site/akun'], ['class' => 'btn btn-success btn-flat']) ?>
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
                'nama',
                'email:email',
                'telp',
                // 'foto',
                [
                    'attribute' => 'foto',
                    'format' => 'raw',
                    'value' => function ($model) {
                        if ($model->foto != '') {
                            return Html::img('@web/user/' . $model->foto, ['class' => 'img-responsive', 'style' => 'height:80px']);
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
