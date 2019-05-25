<?php

/**
 * Information PAYPAL's enviroments
 * @var string
 */

// E.g:
// If enviroment is Development you should use mode = sandbox and endpoint = api.sandbox.paypal.com
// $setting = [
//     'endpoint'       => 'api.paypal.com',
//     'client_id'      => 'AV92BhCOYzF4Vejrbphu1ksMn4KYSlvbzCTcbLdOMixBvAS7sQZhOvMNkMoG',
//     'secret'         => 'EDdjYm7i8w2XZwWGyTqPfPDJim2dUV1hX_3dhY0fR-HulrENli6043rY_0GO1ro1gnkxVe3bMWNDikvq',
//     'business_owner' => 'nguyentruongthanh.dn-facilitator-1@gmail.com',
// ];


use yii\helpers\ArrayHelper;

$setting = [
    'endpoint'       => 'api.sandbox.paypal.com',
    'client_id'      => 'AakpOGt4zPyPZPaaD8pbtOb0v-nlltOoPolW78uh4Q7hho9agD0Cirdmd7f9X2aqw4SxjATkMN6IWGWW',
    'secret'         => 'EEgkGyfcH6mo_OFVfyoiEKp--K6G_HxFgN-pEaQf16eeYtBLom217pt4UMpwH7KBw1Xqr-hZJcQUlRRv',
    'business_owner' => 'barsamms-facilitator@gmail.com',
];

return ArrayHelper::merge(['config' => [
        'mode'                   => 'sandbox',
        'http.ConnectionTimeOut' => 60,
        'log.LogEnabled'         => false,
        'log.FileName'           => 'paypal.log',
        'log.LogLevel'           => 'FINE',
    ]
], $setting);

