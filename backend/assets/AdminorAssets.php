<?php


namespace backend\assets;


use common\extend\assets\BaseAssetBundle;

class AdminorAssets extends BaseAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,900',
        'adminor/plugins/fullside-menu/css/style.css',
        'adminor/plugins/fullside-menu/waves.min.css',
        'adminor/css/dashboard.css',
        'adminor/plugins/charts-c3/c3-chart.css',
        'adminor/plugins/scroll-bar/jquery.mCustomScrollbar.css',
        'adminor/css/icons.css'
    ];
    public $js = [
        'adminor/js/vendors/jquery.sparkline.min.js',
        'adminor/js/vendors/selectize.min.js',
        'adminor/js/vendors/jquery.tablesorter.min.js',
        'adminor/js/vendors/circle-progress.min.js',
        'adminor/plugins/rating/jquery.rating-stars.js',
        'adminor/plugins/fullside-menu/jquery.slimscroll.min.js',
        'adminor/plugins/fullside-menu/waves.min.js',
        'adminor/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js',
        'adminor/js/custom.js'
    ];
}