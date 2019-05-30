<?php

/* @var $this View */

/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\MegaAssets;
use backend\assets\MegaLoginAssets;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

MegaLoginAssets::register($this);
//AppAsset::register($this);
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
<body themebg-pattern="theme6">
<?php $this->beginBody() ?>
<!-- Pre-loader start -->
<?php require_once('includes/_loader.php') ?>
<!-- Pre-loader end -->
<section class="login-block">
    <!-- Container-fluid starts -->
    <div class="container">
        <?= $content ?>
    </div>
    <!-- end of container-fluid -->
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
