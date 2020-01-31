<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Panel;

$this->title =  "User : " . $model->username;
// $this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- View admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
    <div class="user-view box box-primary">
        <div class="box-header">
            <h3 class="box-title">Detail User : <?= $model->username; ?>.</h3>
        </div>
        <div class="box-body">

            <p>
                <?= Html::a('<i class="fa fa-pencil"> Edit</i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'username',
                ],
            ]) ?>

        </div>

    </div>

    <div class="form-group">
        <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
    </div>
<?php endif ?>

<!-- View panel -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>

    <?php $this->title = $model->username; ?>

    <div class="user-view box box-primary">

        <div class="box-header">
            <h3 class="box-title">Profile : <?= $model->panel->nama; ?></h3>
        </div>

        <div class="box-body">

            <p>
                <?= Html::a('<i class="fa fa-pencil"> Edit</i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'username',
                    [
                        'attribute' => 'nama',
                        'value' => function($data) {
                            return $data->panel->nama;
                        }
                    ],
                    [
                        'attribute' => 'email',
                        'value' => function($data) {
                            return $data->panel->email;
                        }
                    ],
                    [
                        'attribute' => 'telp',
                        'value' => function($data) {
                            return $data->panel->telp;
                        }
                    ],
                    [
                        'attribute' => 'foto',
                        'format' => 'raw',
                        'value' => function ($model) {
                            if ($model->panel->foto != '') {
                                return Html::img('@web/user/' . $model->panel->foto, ['class' => 'img-responsive', 'style' => 'height:200px']);
                            } else { 
                                return '<div align="center"><h1>No Image</h1></div>';
                            }
                        },
                    ],
                ],
            ]) ?>
        </div>
    </div>
    <?php endif ?>