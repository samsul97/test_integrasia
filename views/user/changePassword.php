<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use yii\captcha\Captcha;

$this->title = 'Change Password';
?>
<div class="user-form box box-primary">
	<div class="box-body">
		<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($model, 'password')->passwordInput() ?>
		<?= $form->field($model, 'confirm_password')->passwordInput() ?>
		<div class="form-group">
			<button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
			<?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>