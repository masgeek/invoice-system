<?php

/* @var $this View */

/* @var $content string */

use backend\assets\AdminorAssets;
use backend\assets\AppAsset;
use backend\assets\Bootstrap4Asset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

Bootstrap4Asset::register($this);
AdminorAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>
<div id="global-loader"></div>
<div class="page">
    <div class="page-main">
        <div class="app-header1 header py-1 d-flex">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="<?= Yii::$app->homeUrl ?>">
                        <img src="assets\images\brand\logo.png" class="header-brand-img" alt="Carlshah Logo">
                    </a>
                    <div class="menu-toggle-button">
                        <a class="nav-link wave-effect" href="#" id="sidebarCollapse">
                            <span class="fa fa-bars"></span>
                        </a>
                    </div>
                    <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">

                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="nav-unread bg-warning"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div>
                                        <strong>Someone likes our posts.</strong>
                                        <div class="small text-muted">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-commenting-o"></i>
                                    </div>
                                    <div>
                                        <strong> 3 New Comments</strong>
                                        <div class="small text-muted">5 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <div class="notifyimg">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div>
                                        <strong> Server Rebooted.</strong>
                                        <div class="small text-muted">45 mintues ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Notification</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon text-center" data-toggle="dropdown">
                                <i class="icon icon-speech"></i>
                                <span class=" nav-unread badge badge-info badge-pill">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item text-center">2 New Messages</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="assets/images/faces/male/41.jpg"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="assets/images/faces/female/1.jpg"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">5 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex pb-3">
                                    <span class="avatar brround mr-3 align-self-center cover-image"
                                          data-image-src="assets/images/faces/female/18.jpg"></span>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">45 mintues ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">See all Messages</a>
                            </div>
                        </div>
                        <div class="dropdown d-none d-md-flex ">
                            <a class="nav-link icon " data-toggle="dropdown">
                                <i class="fe fe-grid floating"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <ul class="drop-icon-wrap p-1">
                                    <li>
                                        <a href="email.html" class="drop-icon-item">
                                            <i class="fe fe-mail text-dark"></i>
                                            <span class="block"> E-mail</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar2.html" class="drop-icon-item">
                                            <i class="fe fe-calendar text-dark"></i>
                                            <span class="block">calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="maps.html" class="drop-icon-item">
                                            <i class="fe fe-map-pin text-dark"></i>
                                            <span class="block">map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="drop-icon-item">
                                            <i class="fe fe-shopping-cart text-dark"></i>
                                            <span class="block">Cart</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="drop-icon-item">
                                            <i class="fe fe-message-square text-dark"></i>
                                            <span class="block">chat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile.html" class="drop-icon-item">
                                            <i class="fe fe-phone-outgoing text-dark"></i>
                                            <span class="block">contact</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all</a>
                            </div>
                        </div>
                        <div class="dropdown text-center selector">
                            <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-sm brround cover-image"
                                      data-image-src="assets/images/faces/female/25.jpeg"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                                <div class="text-center">
                                    <a href="#" class="dropdown-item text-center font-weight-sembold user"
                                       data-toggle="dropdown">Joyce Stewart</a>
                                    <span class="text-center user-semi-title text-dark">web designer</span>
                                    <div class="dropdown-divider"></div>
                                </div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="login.html">
                                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php require_once('includes/left-nav.php') ?>
            <div class=" content-area">
                <?= $content ?>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href="#">adminor</a>. Designed by <a href="#">Spruko</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>
<!-- BAck to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
