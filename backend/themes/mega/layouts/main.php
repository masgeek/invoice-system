<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

\backend\assets\MegaAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php require_once('includes/_nav.php') ?>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                <img class="img-menu-user img-radius" src="files/assets/images/avatar-4.jpg"
                                     alt="User-Profile-Image">
                                <div class="user-details">
                                    <p>John Doe</p>
                                    <p id="more-details">UX Designer
                                        <i class="feather icon-chevron-down m-l-10"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="user-profile.html">
                                            <i class="feather icon-user"></i>View Profile
                                        </a>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i>Settings
                                        </a>
                                        <a href="auth-normal-sign-in.html">
                                            <i class="feather icon-log-out"></i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pcoded-navigation-label">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-home"></i>
																																							</span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="index.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Default</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="dashboard-ecommerce.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Ecommerce</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">CRM</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Analytics</span>
                                            <span class="pcoded-badge label label-info ">NEW</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dashboard-project.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-sidebar"></i>
																																							</span>
                                    <span class="pcoded-mtext">Page layouts</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="icon-pie-chart"></i>
																																									</span>
                                            <span class="pcoded-mtext">Vertical</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="menu-static.html" class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Static Layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-header-fixed.html" class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Header Fixed</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-compact.html" class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Compact</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-sidebar.html" class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Sidebar Fixed</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="icon-pie-chart"></i>
																																									</span>
                                            <span class="pcoded-mtext">Horizontal</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="menu-horizontal-static.html" target="_blank"
                                                   class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Static Layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-fixed.html" target="_blank"
                                                   class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Fixed layout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-icon.html" target="_blank"
                                                   class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Static With Icon</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-horizontal-icon-fixed.html" target="_blank"
                                                   class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="icon-chart"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Fixed With Icon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-bottom.html" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="icon-pie-chart"></i>
																																									</span>
                                            <span class="pcoded-mtext">Bottom Menu</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-layout.html" target="_blank" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="icon-pie-chart"></i>
																																									</span>
                                            <span class="pcoded-mtext">Box Layout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="menu-rtl.html" target="_blank" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="icon-pie-chart"></i>
																																									</span>
                                            <span class="pcoded-mtext">RTL</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="navbar-light.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-menu"></i>
																																							</span>
                                    <span class="pcoded-mtext">Navigation</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-layers"></i>
																																							</span>
                                    <span class="pcoded-mtext">Widget</span>
                                    <span class="pcoded-badge label label-danger">100+</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="widget-statistic.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Statistic</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="widget-data.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Data</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="widget-chart.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Chart Widget</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="widget-chart-advance.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Advance Widgets</span>
                                            <span class="pcoded-badge label label-info">25+</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">UI Element</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-box"></i>
																																							</span>
                                    <span class="pcoded-mtext">Basic</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="alert.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Alert</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="breadcrumb.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Breadcrumbs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="button.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Button</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="box-shadow.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Box-Shadow</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="accordion.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Accordion</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="generic-class.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Generic Class</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tabs.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Tabs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="color.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Color</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="label-badge.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Label Badge</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="progress-bar.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Progress Bar</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="preloader.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Pre-Loader</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">List</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tooltip.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Tooltip And Popover</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="typography.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Typography</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="other.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Other</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-gitlab"></i>
																																							</span>
                                    <span class="pcoded-mtext">Advance</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="draggable.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Draggable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-grid.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Grid Stack</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="light-box.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Light Box</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="modal.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Modal</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notification.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Notifications</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="notify.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">PNOTIFY</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="rating.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Rating</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="range-slider.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Range Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="slider.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Slider</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="syntax-highlighter.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Syntax Highlighter</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="tour.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Tour</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="treeview.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Tree View</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="nestable.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Nestable</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="toolbar.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Toolbar</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="x-editable.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">X-Editable</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-package"></i>
																																							</span>
                                    <span class="pcoded-mtext">Extra</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="session-timeout.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Session Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="session-idle-timeout.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Session Idle Timeout</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="offline.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Offline</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="animation.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-aperture rotate-refresh"></i>
																																							</span>
                                    <span class="pcoded-mtext">Animations</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="sticky.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-cpu"></i>
																																							</span>
                                    <span class="pcoded-mtext">Sticky Notes</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-command"></i>
																																							</span>
                                    <span class="pcoded-mtext">Icons</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="icon-font-awesome.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Font Awesome</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-themify.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Themify</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-simple-line.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Simple Line Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-ion.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Ion Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-material-design.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Material Design</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-icofonts.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Ico Fonts</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-weather.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Weather Icon</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-typicons.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Typicons</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="icon-flags.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Flags</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Forms</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-clipboard"></i>
																																							</span>
                                    <span class="pcoded-mtext">Form</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="form-elements-component.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Components</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Add-On</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-elements-advance.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Advance</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="form-validation.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Validation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="form-picker.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-edit-1"></i>
																																							</span>
                                    <span class="pcoded-mtext">Form Picker</span>
                                    <span class="pcoded-badge label label-warning">NEW</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-select.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-feather"></i>
																																							</span>
                                    <span class="pcoded-mtext">Form Select</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-masking.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-shield"></i>
																																							</span>
                                    <span class="pcoded-mtext">Form Masking</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-wizard.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-tv"></i>
																																							</span>
                                    <span class="pcoded-mtext">Form Wizard</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-book"></i>
																																							</span>
                                    <span class="pcoded-mtext">Ready To Use</span>
                                    <span class="pcoded-badge label label-danger">HOT</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="ready-cloned-elements-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Cloned Elements Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-currency-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Currency Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-booking.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Booking Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-booking-multi-steps.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Booking Multi Steps</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-comment.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Comment Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-form-contact.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Contact Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-job-application-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Job Application Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-js-addition-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">JS Addition Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-login-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Login Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-popup-modal-form.html" target="_blank"
                                           class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Popup Modal Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-registration-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Registration Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-review-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Review Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-subscribe-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Subscribe Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-suggestion-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Suggestion Form</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="ready-tabs-form.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Tabs Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Tables</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-credit-card"></i>
																																							</span>
                                    <span class="pcoded-mtext">Bootstrap Table</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="bs-basic-table.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Basic Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-sizing.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Sizing Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-border.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Border Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="bs-table-styling.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Styling Table</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-inbox"></i>
																																							</span>
                                    <span class="pcoded-mtext">Data Table</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="dt-basic.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Basic Initialization</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-advance.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Advance Initialization</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-styling.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Styling</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-api.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">API</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ajax.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Ajax</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-server-side.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Server Side</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-plugin.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Plug-In</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-data-sources.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Data Sources</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-server"></i>
																																							</span>
                                    <span class="pcoded-mtext">DT Extensions</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="dt-ext-autofill.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">AutoFill</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Button</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Basic Button</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dt-ext-buttons-html-5-data-export.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Data Export</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Col Reorder</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Fixed Columns</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Fixed Header</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-key-table.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Key Table</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-responsive.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Responsive</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Row Reorder</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-scroller.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Scroller</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="dt-ext-select.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Select Table</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="foo-table.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-hash"></i>
																																							</span>
                                    <span class="pcoded-mtext">FooTable</span>
                                </a>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-airplay"></i>
																																							</span>
                                    <span class="pcoded-mtext">Handson Table</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="handson-appearance.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Appearance</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-data-operation.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Data Operation</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-rows-cols.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Rows Columns</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-columns-only.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Columns Only</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-cell-features.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Cell Features</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-cell-types.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Cell Types</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-integrations.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Integrations</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-rows-only.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Rows Only</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="handson-utilities.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Utilities</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="editable-table.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-edit"></i>
																																							</span>
                                    <span class="pcoded-mtext">Editable Table</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Chart And Maps</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-pie-chart"></i>
																																							</span>
                                    <span class="pcoded-mtext">Charts</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="chart-google.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Google Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-echart.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Echarts</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-chartjs.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">ChartJs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">List Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-float.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Float Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-knob.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Knob chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-morris.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Morris Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-nvd3.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Nvd3 Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-peity.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Peity Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-radial.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Radial Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-rickshaw.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Rickshaw Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-sparkline.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Sparkline Chart</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="chart-c3.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">C3 Chart</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-map"></i>
																																							</span>
                                    <span class="pcoded-mtext">Maps</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="map-google.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-vector.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="map-api.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Google Map Search API</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="location.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Location</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="files/extra-pages/landingpage/index.html" target="_blank"
                                   class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-navigation-2"></i>
																																							</span>
                                    <span class="pcoded-mtext">Landing Page</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Pages</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-unlock"></i>
																																							</span>
                                    <span class="pcoded-mtext">Authentication</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Login</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="auth-normal-sign-in.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Simple</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-normal-sign-in-header-footer.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Header &amp; Footer</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-in-social.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Social</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-in-social-header-footer.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Social With Header &amp; Footer</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Registration</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="auth-sign-up.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Simple</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-header-footer.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Header &amp; Footer</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-social.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Social</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="auth-sign-up-social-header-footer.html" target="_blank"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Social With Header &amp; Footer</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="auth-multi-step-sign-up.html" target="_blank"
                                           class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Multi Step Registration</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-reset-password.html" target="_blank"
                                           class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="auth-modal.html" target="_blank" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Modal</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-sliders"></i>
																																							</span>
                                    <span class="pcoded-mtext">Maintenance</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="error.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Error</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="comming-soon.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Comming Soon</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="offline-ui.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Offline UI</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-users"></i>
																																							</span>
                                    <span class="pcoded-mtext">User Profile</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="timeline.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Timeline</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="timeline-social.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Timeline Social</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="user-profile.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">User Profile</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="user-card.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">User Card</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-shopping-cart"></i>
																																							</span>
                                    <span class="pcoded-mtext">E-Commerce</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="product.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Product</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Product List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-edit.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Product Edit</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-detail.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Product Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-cart.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Product Card</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="product-payment.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Credit Card Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-mail"></i>
																																							</span>
                                    <span class="pcoded-mtext">Email</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="email-compose.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Compose Email</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="email-inbox.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="email-read.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Read Mail</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="ti-email"></i>
																																									</span>
                                            <span class="pcoded-mtext">Email Template</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="files/extra-pages/email-templates/email-welcome.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Welcome Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="files/extra-pages/email-templates/email-password.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Reset Password</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="files/extra-pages/email-templates/email-newsletter.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Newsletter Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="files/extra-pages/email-templates/email-launch.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">App Launch</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="files/extra-pages/email-templates/email-activation.html"
                                                   class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Activation Code</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">App</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-globe"></i>
																																							</span>
                                    <span class="pcoded-mtext">Social</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="fb-wall.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Wall</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="message.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Messages</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-check-circle"></i>
																																							</span>
                                    <span class="pcoded-mtext">Task</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="task-list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Task List</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-board.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Task Board</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="task-detail.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Task Detail</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="issue-list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Issue List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-bookmark"></i>
																																							</span>
                                    <span class="pcoded-mtext">To-Do</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="todo.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">To-Do</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="notes.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Notes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-image"></i>
																																							</span>
                                    <span class="pcoded-mtext">Gallery</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="gallery-grid.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Gallery-Grid</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-masonry.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Masonry Gallery</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="gallery-advance.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Advance Gallery</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-search"></i>
																																							</span>
                                    <span class="pcoded-mtext">Search</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="search-result.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Simple Search</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="search-result2.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Grouping Search</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-award"></i>
																																							</span>
                                    <span class="pcoded-mtext">Job Search</span>
                                    <span class="pcoded-badge label label-danger">NEW</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="job-card-view.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Card View</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-details.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Job Detailed</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-find.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Job Find</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="job-panel-view.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Job Panel View</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Extension</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-file-plus"></i>
																																							</span>
                                    <span class="pcoded-mtext">Editor</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="ck-editor.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">CK-Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="wysiwyg-editor.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">WYSIWYG Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="ace-editor.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Ace Editor</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="long-press-editor.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Long Press Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-file-minus"></i>
																																							</span>
                                    <span class="pcoded-mtext">Invoice</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="invoice.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="invoice-summary.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Invoice Summary</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="invoice-list.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Invoice List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-calendar"></i>
																																							</span>
                                    <span class="pcoded-mtext">Event Calendar</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="event-full-calender.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Full Calendar</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="event-clndr.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">CLNDER</span>
                                            <span class="pcoded-badge label label-info">NEW</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="image-crop.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-scissors"></i>
																																								<b>IC</b>
																																							</span>
                                    <span class="pcoded-mtext">Image Cropper</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="file-upload.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-upload-cloud"></i>
																																							</span>
                                    <span class="pcoded-mtext">File Upload</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="change-loges.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-briefcase"></i>
																																							</span>
                                    <span class="pcoded-mtext">Change Loges</span>
                                    <span class="pcoded-badge label label-warning">1.0</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Other</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-list"></i>
																																							</span>
                                    <span class="pcoded-mtext">Menu Levels</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Menu Level 2.1</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
																																									<span class="pcoded-micon">
																																										<i class="ti-direction-alt"></i>
																																									</span>
                                            <span class="pcoded-mtext">Menu Level 2.2</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
																																											<span class="pcoded-micon">
																																												<i class="ti-direction-alt"></i>
																																											</span>
                                                    <span class="pcoded-mtext">Menu Level 3.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Menu Level 2.3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-power"></i>
																																								<b>D</b>
																																							</span>
                                    <span class="pcoded-mtext">Disabled Menu</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="sample-page.html" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-watch"></i>
																																							</span>
                                    <span class="pcoded-mtext">Sample Page</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pcoded-navigation-label">Support</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="#" target="_blank" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-monitor"></i>
																																							</span>
                                    <span class="pcoded-mtext">Documentation</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" target="_blank" class="waves-effect waves-dark">
																																							<span class="pcoded-micon">
																																								<i class="feather icon-help-circle"></i>
																																							</span>
                                    <span class="pcoded-mtext">Need Support ?</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10"><?= Html::encode($this->title) ?></h5>
                                        <p class="m-b-0">Today is: <?= date('d M-Y')?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <?= $content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
