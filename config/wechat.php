<?php

return [
    'official_account' => [
        'default' => [
            'app_id' => env('WECHAT_OFFICIAL_ACCOUNT_APPID', ''),
            'secret' => env('WECHAT_OFFICIAL_ACCOUNT_SECRET', ''),
            'token' => env('WECHAT_OFFICIAL_ACCOUNT_TOKEN', ''),
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => storage_path('logs/wechat.log'),
            ],
        ],
    ],

    // 授权回调URL
    'oauth' => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => 'wechat/callback',
    ],
];
