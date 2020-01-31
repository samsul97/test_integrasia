<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserPanel */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'User Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-panel-view box box-primary">
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'nama',
                'email:email',
                'telp',
                [
                    'attribute' => 'foto',
                    'format' => 'raw',
                    'value' => function ($model) {
                        if ($model->foto != '') {
                            return Html::img('@web/user/' . $model->foto, ['class' => 'img-responsive', 'style' => 'height:200px']);
                        } else { 
                            return '<div align="center"><h1>No Image</h1></div>';
                        }
                    },
                ],
            ],
        ]) ?>
    </div>
</div>
<button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
