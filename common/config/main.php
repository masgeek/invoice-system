<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'Invoice Tool',
    'version' => '1.0.0',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
        'datecontrol' => [
            'class' => '\kartik\datecontrol\Module',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'api' => [
            'class' => 'common\components\Api',
        ],
        'authManager' => [
            //'class' => 'yii\rbac\PhpManager',
            'class' => 'yii\rbac\DbManager',
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => YII_DEBUG ? '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI' : '6LeCmhATAAAAAJz8aA6herY6UJIpt4yVPXCXj0zw',
            'secret' => YII_DEBUG ? '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe' : '6LeCmhATAAAAAGzVoPdjPRL1Rs_ZfNpfDUcXa43u',
        ],
        'payPalRest' => [
            'class' => 'common\components\PaypalComponent',
            'pathFileConfig' => dirname(__DIR__) . '/config/paypal-rest.php',
            'successUrl' => '/site/paypal-success', //full url action return url
            'cancelUrl' => '/site/paypal-cancel' //full url action return url
        ],
    ],
];