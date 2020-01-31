<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\CreateUser;
use app\models\MJurusan;
use app\models\UserRole;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\file\fileInput;
// use app\models\Mjurusan;
// use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
$this->title = 'Daftar Akun';

$fieldOptions1 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions2 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
$fieldOptions3 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions4 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-phone form-control-feedback'></span>"
];

$fieldOptions5 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions6 = [
 'options' => ['class' => 'form-group has-feedback'],
 'inputTemplate' => "{input}<span class='glyphicon glyphicon-home form-control-feedback'></span>"
];
?>

<div class="login-box">
  <div class="login-box-body">
   <p class="login-box-msg">Daftar Akun</p>

   <?php $form = ActiveForm::begin(['id' => 'CreateUser', 'enableClientValidation' => false]); ?>

    <?= $form->field($model, 'id_user_role')->widget(Select2::classname(),
        [
        'data' => UserRole::getList(),
        'options' => [
            'placeholder' => '-Pilih Pengguna-',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

   <?= $form
   ->field($model, 'username', $fieldOptions1)
   ->label(false)
   ->textInput(['placeholder' => 'username']) ?>

   <?= $form
   ->field($model, 'email', $fieldOptions3)
   ->label(false)
   ->textInput(['placeholder' => 'email']) ?>

   <?= $form
   ->field($model, 'nama', $fieldOptions5)
   ->label(false)
   ->textInput(['placeholder' => 'nama']) ?>
   
   <?= $form
   ->field($model, 'password', $fieldOptions2)
   ->label(false)
   ->passwordInput(['placeholder' => 'password']) ?>

   <?= $form
   ->field($model, 'telp', $fieldOptions4)
   ->label(false)
   ->textInput(['placeholder' => 'telepon']) ?>

   <?= $form->field($model, 'foto')->fileInput() ?>

   <div class="row">
    <div class="col-xs-12">
      <?= Html::submitButton('Daftar', ['class' => 'btn btn-block btn-sosial btn-danger btn-flat', 'name' => 'login-button']) ?>
    </div>
  </div>
  <?php ActiveForm::end(); ?>
</div>
</div>