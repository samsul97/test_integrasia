<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gps */

$this->title = 'Tambah GPS';
$this->params['breadcrumbs'][] = ['label' => 'GPS', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="gps-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
