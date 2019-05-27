<?php

namespace backend\assets;

use common\extend\assets\BaseAssetBundle;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class Bootstrap4Asset extends BaseAssetBundle
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
        'yii\jui\JuiAsset',
        //'yii\bootstrap4\BootstrapPluginAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
