<?php


namespace backend\assets;


use common\extend\assets\BaseAssetBundle;

class CapletAssets extends BaseAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css =[
        'caplet-assets/css/bootstrap/bootstrap-themes.css',
        'caplet-assets/css/style.css',
        'caplet-assets/css/styleTheme1.css',
        'caplet-assets/css/styleTheme2.css',
        'caplet-assets/css/styleTheme3.css',
        'caplet-assets/css/styleTheme4.css',
    ];
    public $js = [
        'caplet-assets/js/modernizr/modernizr.js',
        'caplet-assets/plugins/mmenu/jquery.mmenu.js',
        'caplet-assets/js/styleswitch.js',
        'caplet-assets/plugins/form/form.js',
        'caplet-assets/plugins/datetime/datetime.js',
        'caplet-assets/plugins/chart/chart.js',
        'caplet-assets/plugins/pluginsForBS/pluginsForBS.js',
        'caplet-assets/plugins/miscellaneous/miscellaneous.js',
        'caplet-assets/js/caplet.custom.js'
    ];
}