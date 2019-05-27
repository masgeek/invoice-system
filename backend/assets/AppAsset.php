<?php

namespace backend\assets;

use common\extend\assets\BaseAssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends BaseAssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\jui\JuiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        //'yidas\yii\fontawesome\FontawesomeAsset',
    ];
}
