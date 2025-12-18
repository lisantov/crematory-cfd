<?php

return [
    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
        'broadcasting/auth',
        'ws',
        'wss',
        'websocket',
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:5173',
        'ws://localhost:5173',
        'http://localhost:9000',
        'ws://localhost:9000',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => [
        '*',
        'Upgrade',
        'Connection',
        'Sec-WebSocket-Key',
        'Sec-WebSocket-Version',
        'Sec-WebSocket-Extensions',
        'Sec-WebSocket-Protocol',
        'X-Socket-ID',
    ],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];
