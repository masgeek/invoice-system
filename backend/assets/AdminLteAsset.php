<?php

namespace backend\assets;

use common\extend\assets\BaseAssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminLteAsset extends BaseAssetBundle
{
    public $sourcePath = '@backend/themes/admin-lte-base/';
    //public $basePath = '@vendor';
    //public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'bower_components/Ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'plugins/iCheck/square/blue.css',
        'dist/css/skins/_all-skins.min.css'
    ];
    public $js = [
        'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        'bower_components/fastclick/lib/fastclick.js',
        'plugins/iCheck/icheck.min.js',
        'dist/js/adminlte.min.js',
        'dist/js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yidas\yii\fontawesome\FontawesomeAsset',
    ];
}
