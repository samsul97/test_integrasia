<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserPanel */

$this->title = 'Update User Panel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-panel-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
