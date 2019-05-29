<?php


namespace backend\assets;


use common\extend\assets\BaseAssetBundle;

class MegaAssets extends BaseAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'files/assets/pages/waves/css/waves.min.css',
        'files/assets/icon/themify-icons/themify-icons.css',
        'files/assets/icon/themify-icons/themify-icons.css',
        'files/assets/icon/font-awesome/css/font-awesome.min.css',
        'files/assets/css/jquery.mCustomScrollbar.css',
        'files/assets/pages/chart/radial/css/radial.css',
        'files/assets/css/style.css',
        //'files/assets/icon/feather/css/feather.css'
    ];
    public $js = [
        'files/assets/pages/widget/excanvas.js',

        //'files/bower_components/popper.js/js/popper.min.js',
        'files/assets/pages/waves/js/waves.min.js',
        'files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js',
        'files/bower_components/modernizr/js/modernizr.js',
        'files/bower_components/modernizr/js/css-scrollbars.js',
        'files/assets/js/pcoded.min.js',
        'files/assets/js/vertical/vertical-layout.min.js',
        'files/assets/js/jquery.mCustomScrollbar.concat.min.js',
        'https://www.amcharts.com/lib/3/amcharts.js',
        'files/assets/pages/dashboard/custom-dashboard.js',
        'files/assets/js/script.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}