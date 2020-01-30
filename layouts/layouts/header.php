<?php
use yii\helpers\Html;
use app\models\User;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<?php if (Yii::$app->user->identity->id_user_role == 1) : ?>

    <header class="main-header">

        <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">

                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (User::isAdmin()): ?>
                                <?= User::getFotoAdmin(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <?php if (User::isPanel()): ?>
                            <?= User::getFotoPanel(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if (User::isAdmin()): ?>
                                <?= User::getFotoAdmin(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <?php if (User::isPanel()): ?>
                            <?= User::getFotoPanel(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <p>
                            <?= Yii::$app->user->identity->username ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-right">
                            <?= Html::a(
                                'Sign out',
                                ['/site/logout'],
                                ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                            ) ?>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>
<?php endif ?>

<?php if (Yii::$app->user->identity->id_user_role == 2) : ?>

    <header class="main-header">

        <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">

                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (User::isAdmin()): ?>
                                <?= User::getFotoAdmin(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <?php if (User::isPanel()): ?>
                            <?= User::getFotoPanel(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if (User::isAdmin()): ?>
                                <?= User::getFotoAdmin(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <?php if (User::isPanel()): ?>
                            <?= User::getFotoPanel(['class' => 'user-image']); ?>
                         <?php endif ?>
                         <p>
                            <?= Yii::$app->user->identity->username ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?php if (User::isPanel()): ?>
                             <?= Html::a("Profile",["user/view","id" => Yii::$app->user->identity->id],['class' => 'btn btn-default btn-flat']) ?>
                         <?php endif ?>
                     </div>
                     <div class="pull-right">
                        <?= Html::a(
                            'Sign out',
                            ['/site/logout'],
                            ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                        ) ?>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
</nav>
</header>
<?php endif ?>