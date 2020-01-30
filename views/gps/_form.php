<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gps-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'id')->textInput() ?>

        <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'garansi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tgl_beli')->textInput() ?>

        <?= $form->field($model, 'tgl_jual')->textInput() ?>

        <?= $form->field($model, 'dijual_ke')->textInput() ?>

        <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
