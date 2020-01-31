<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sold */

$this->title = 'Update Sold: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Solds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sold-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
