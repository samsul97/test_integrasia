<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GpsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gps-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'garansi') ?>

    <?php // echo $form->field($model, 'tgl_beli') ?>

    <?php // echo $form->field($model, 'tgl_jual') ?>

    <?php // echo $form->field($model, 'dijual_ke') ?>

    <?php // echo $form->field($model, 'deskripsi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
