<?php
/** @noinspection PhpUnhandledExceptionInspection */

use common\widgets\Menu; ?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--<div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Main Navigation', 'options' => ['class' => 'header']],
                    ['label' => 'Invoices', 'icon' => 'file-code-o', 'url' => ['/invoice']],
                    ['label' => 'Payments', 'icon' => 'file-code-o', 'url' => ['/payments']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>
    </section>
    <!-- /.sidebar -->
</aside>
