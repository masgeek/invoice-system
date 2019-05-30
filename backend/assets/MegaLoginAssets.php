<?php


namespace backend\assets;


use common\extend\assets\BaseAssetBundle;

class MegaLoginAssets extends BaseAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'files/assets/pages/waves/css/waves.min.css',
        'files/assets/icon/themify-icons/themify-icons.css',
        'files/assets/icon/icofont/css/icofont.css',
        'files/assets/icon/font-awesome/css/font-awesome.min.css',
        'files/assets/css/style.css',
        //'files/assets/icon/feather/css/feather.css'
    ];
    public $js = [
        //'files/assets/pages/widget/excanvas.js',
        'files/bower_components/popper.js/js/popper.min.js',
        'files/assets/pages/waves/js/waves.min.js',
        'files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js',
        'files/bower_components/modernizr/js/modernizr.js',
        'files/bower_components/modernizr/js/css-scrollbars.js',
        'files/assets/js/common-pages.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}