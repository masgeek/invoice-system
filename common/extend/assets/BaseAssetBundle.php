<?php


namespace common\extend\assets;


use yii\web\AssetBundle;

class BaseAssetBundle extends AssetBundle
{
    public $publishOptions = [
        //'forceCopy' => false,
        //'linkAssets' => true,
    ];

    public $css = [
    ];
    public $js = [
    ];

    public $depends = [
    ];
}