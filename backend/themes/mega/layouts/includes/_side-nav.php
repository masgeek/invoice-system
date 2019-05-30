<?php

use yii\helpers\Url; ?>
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-menu-user img-radius" src="files/assets/images/avatar-blank.jpg"
                     alt="User-Profile-Image">
            </div>
        </div>
        <div class="pcoded-navigation-label">Dashboard</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="<?= Yii::$app->homeUrl ?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">My Dashboard</span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label">Sales</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="<?= Url::to(['/invoice']) ?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Invoices</span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label">User Management</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="<?= Url::to(['/user']) ?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Manager users</span>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['/user-profile']) ?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Manager user profiles</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

