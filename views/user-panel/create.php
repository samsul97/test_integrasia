<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserPanel */

$this->title = 'Create User Panel';
$this->params['breadcrumbs'][] = ['label' => 'User Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-panel-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
