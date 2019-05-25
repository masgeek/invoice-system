<?php

use common\models\User;
use yii\base\Action;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'role-admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'right-menu',
            'controllerMap' => [
                'assignment' => [
                    //'label' => 'Grant Access', // change label
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'common\models\User',
                    //'searchClass' => 'common\models\search\UserSearch',
                    'idField' => 'id',
                    'usernameField' => 'username',
                    'extraColumns' => [
                        [
                            'attribute' => 'email',
                            'label' => 'Email'
                        ],
                        [
                            'attribute' => 'fullname',
                            'label' => 'Full Names',
                            'value' => function ($model, $key, $index, $column) {
                                /* @var $model User */
                                return $model->userProfile != null ? $model->userProfile->getFullNames() : '';
                            },
                        ],
                    ],
                ],
            ],
        ],
        'webshell' => [
            'class' => 'samdark\webshell\Module',
            // 'yiiScript' => Yii::getAlias('@root'). '/yii', // adjust path to point to your ./yii script
            'allowedIPs' => ['127.0.0.1', '::1', '141.80.234.65'],
            'checkAccessCallback' => function (Action $action) {
                // return true if access is granted or false otherwise
                return true;
            }
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '*',
            'site/*',
            'gridview/*',
            //'role-admin/*',
            //'user/*',
            //'gii/*',
            //'debug/*'
            //'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
    'params' => $params,
];
