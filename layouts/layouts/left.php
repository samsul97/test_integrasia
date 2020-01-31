<?php
use app\models\User;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if (User::isAdmin()): ?>
                   <?= User::getFotoAdmin(['class' => 'img-circle']); ?>
               <?php endif ?>
               <?php if (User::isPanel()): ?>
                   <?= User::getFotoPanel(['class' => 'img-circle']); ?>
               <?php endif ?>
           </div>
           <div class="pull-left info">
            <p><?= Yii::$app->user->identity->username ?></p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <?php if (User::isAdmin()){ ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Aplikasi', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                    ['label' => 'Kelola GPS', 'icon' => 'fa fa-gps', 'url' => ['gps/index']],
                    ['label' => 'Kelola User', 'icon' => 'user', 'url' => ['user/index']],
                    [
                        'label' => 'Data Master',
                        'icon' => 'tasks',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Sold', 'icon' => 'circle-o', 'url' => ['sold/index']],
                        ],
                    ],
                ],
            ]
        ) ?>

    <?php } elseif(User::isPanel()) { ?>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                    ['label' => 'Kelola GPS', 'icon' => 'fa fa-gps', 'url' => ['gps/index']],
                    ['label' => 'Edit Profile', 'icon' => 'user', 'url' => ['user/view','id' => Yii::$app->user->identity->id]],
                    
                ],
            ]
        ) ?>

    <?php } ?>
</section>

</aside>
