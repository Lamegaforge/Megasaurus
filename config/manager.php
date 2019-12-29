<?php

return [
    'twitch' => [
        'default_driver' => 'api',
        'drivers' => [
            'api' => [
                'client_id' => env('TWITCH_CLIENT_ID'),
                'channel' => 'lamegaforgelive',
            ],
        ],
    ],
];
