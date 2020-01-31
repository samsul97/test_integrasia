<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use app\models\Sold;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Gps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gps-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">
        <?= $form->field($model, 'foto')->fileInput() ?>
        <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>
        <div class="row">
          <div class="col-lg-6">
            <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'garansi', [ 'template' => '
            {label}
            <div class="input-group">
            {input}
            <span class="input-group-addon" id="basic-addon2">Bulan</span>
            </div>
            {hint}
            {error}',
            'options' => ['class' => 'has-feedback']])->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <?= $form->field($model, 'tgl_beli')->widget(DatePicker::classname(), [
         'removeButton' => false,
         'value' => date('Y-m-d'),
         'options' => ['placeholder' => 'Tanggal Beli'],
         'pluginOptions' => [
           'autoclose'=>true,
           'format' => 'yyyy-mm-dd'
       ]])
       ?>
   </div>
   <div class="col-lg-6">
       <?= $form->field($model, 'tgl_jual')->widget(DatePicker::classname(), [
         'removeButton' => false,
         'value' => date('Y-m-d'),
         'options' => ['placeholder' => 'Tanggal Jual'],
         'pluginOptions' => [
           'autoclose'=>true,
           'format' => 'yyyy-mm-dd'
       ]])
       ?>
   </div>
</div>

<?= $form->field($model, 'sold')->widget(Select2::classname(),
    [
        'data' => Sold::getList(),
        'options' => [
            'placeholder' => '-Pilih Opsi-',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
</div>

<div class="box-footer">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
</div>
<?php ActiveForm::end(); ?>
</div>


<!-- <script>
    $('#select_sold').on('change', function(e){
        $('#gps-sold').val($(this).val());
        if ($(this).val() == 'Lainya') {
            $('#gps-sold').attr('type','input');
            $('#gps-sold').val('');
        } else {
            $('#gps-sold').attr('type','hidden');
        }
        $('#gps-sold').focus();
    });
</script> -->