<?php

use yii\helpers\Html;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
use yii\widgets\LinkPager;
use app\models\Gps;

// use app\models\User;
/* @var $this yii\web\View */

$this->title = 'Aplikasi Pendataan GPS';
?>

<?php if (Yii::$app->user->identity->id_user_role == 1): ?>

  <div class="site-index">
    <small>Selamat datang di situs A-Rium. Silahkan kelola kebutuhan Anda dengan baik.</small>
    <br>
    <br>
    <div class="row" style="margin: 3px;">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <p>Dosen</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['dosen/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <p>Akademik</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['akademik/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
          <div class="inner">
            <p>Hononarium</p>
            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?=Url::to(['hononarium/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <p>Jadwal Kuliah</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
          <a href="<?=Url::to(['jadwalkuliah/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <?php endif ?>

  <?php if (Yii::$app->user->identity->id_user_role == 2): ?>

  <div class="site-index">
    <small>Selamat datang di situs A-Rium. Silahkan kelola kebutuhan Anda dengan baik.</small>
    <br>
    <br>
    <div class="row" style="margin: 3px;">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <p>Dosen</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['dosen/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <p>Akademik</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-user-o"></i>
          </div>
          <a href="<?=Url::to(['akademik/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
          <div class="inner">
            <p>Hononarium</p>
            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-wrench"></i>
          </div>
          <a href="<?=Url::to(['hononarium/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-white">
          <div class="inner">
            <p>Jadwal Kuliah</p>

            <h3><?= Yii::$app->formatter->asInteger(Gps::getCount()); ?></h3>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
          <a href="<?=Url::to(['jadwalkuliah/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <?php endif ?>