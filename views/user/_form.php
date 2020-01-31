<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
    <div class="user-form">
        <?php
        if ($model->isNewRecord) {
            ?>
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'username')->textInput(['minlength' => 6, 'maxlength' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput(['minlength' => 6, 'maxlength' => true]) ?>

            <?php /*<?= $form->field($model, 'id_anggota')->textInput() ?>*/ ?>
            <?= $form->field($model, 'id_anggota')->widget(Select2::classname(), [
                'data' =>  Anggota::getList(),
                'options' => [
                  'placeholder' => '- Pilih Anggota -',
              ],
              'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


            <?= $form->field($model, 'id_petugas')->widget(Select2::classname(), [
                'data' =>  Petugas::getList(),
                'options' => [
                  'placeholder' => '- Pilih Petugas -',
              ],
              'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


            <?= $form->field($model, 'id_user_role')->widget(Select2::classname(), [
                'data' =>  UserRole::getList(),
                'options' => [
                  'placeholder' => '- Pilih Level User -',
              ],
              'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

            <?= $form->field($model, 'status')->widget(Select2::classname(), [
                'data' =>  [1 => 'Admin', 2 => 'Anggota', 3 => 'Petugas'],
                'options' => [
                  'placeholder' => '- Pilih Status -',
              ],
              'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <div class="form-group">
            <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <?php
    } else {
        ?>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
            <?= Html::submitButton('Simpan Username', ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-key"> Ganti Password</i>', ['change-password', 'id' => $model->id], ['class' => 'btn btn-primary']); ?>
        </div>
        <?php ActiveForm::end(); ?>
        <?php   
    }
    ?>
</div>
<?php endif ?>

<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
    <div class="user-form">

        <div class="form-group">
            <?= Html::a('<i class="fa fa-user"> Biodata</i>', ['user-panel/view', 'id' => $model->id_user], ['class' => 'btn btn-primary']); ?>
            <?= Html::a('<i class="fa fa-key"> Ganti Password</i>', ['change-password', 'id' => $model->id], ['class' => 'btn btn-primary']); ?>
        </div>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
            <?= Html::submitButton('Simpan Username', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <?php endif ?>