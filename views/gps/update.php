<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gps */

$this->title = 'Update Gps: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gps-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
