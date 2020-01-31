<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gps */

$this->title = 'Ubah GPS: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'GPS', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="gps-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
