<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jual */

$this->title = 'Create Jual';
$this->params['breadcrumbs'][] = ['label' => 'Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jual-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
