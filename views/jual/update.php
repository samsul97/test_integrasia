<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jual */

$this->title = 'Update Jual: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jual-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
