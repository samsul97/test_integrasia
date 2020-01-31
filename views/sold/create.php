<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sold */

$this->title = 'Create Sold';
$this->params['breadcrumbs'][] = ['label' => 'Solds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sold-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
