<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Sold;
/* @var $this yii\web\View */
/* @var $model app\models\Gps */

$this->title = $model->brand;
$this->params['breadcrumbs'][] = ['label' => 'Gps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gps-view box box-primary">
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'brand',
                'model',
                'nama',
                'garansi',
                'tgl_beli',
                'tgl_jual',
                [
                    'attribute' => 'sold',
                    'format' => 'raw',
                    'value' => function ($data) {
                        $model = Sold::findOne(['id' => $data->sold]);
                        return $model->name;
                    }
                ],
                'deskripsi:ntext',
            ],
        ]) ?>
    </div>
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
</div>
