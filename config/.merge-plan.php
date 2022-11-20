<?php

declare(strict_types=1);

// Do not edit. Content will be replaced.
return [
    '/' => [
        'params' => [
            'yiisoft/aliases' => [
                'config/params.php',
            ],
            'yiisoft/log-target-file' => [
                'config/params.php',
            ],
            'yiisoft/yii-console' => [
                'config/params.php',
            ],
            '/' => [
                'params.php',
            ],
        ],
        'common' => [
            'yiisoft/aliases' => [
                'config/common.php',
            ],
            'yiisoft/log-target-file' => [
                'config/common.php',
            ],
            'yiisoft/yii-event' => [
                'config/common.php',
            ],
            '/' => [
                'common/*.php',
            ],
        ],
        'events-console' => [
            'yiisoft/log' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-console' => [
                'config/events-console.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-console.php',
            ],
            '/' => [
                '$events',
                'events-console.php',
            ],
        ],
        'events-web' => [
            'yiisoft/log' => [
                'config/events-web.php',
            ],
            'yiisoft/yii-event' => [
                '$events',
                'config/events-web.php',
            ],
        ],
        'console' => [
            'yiisoft/yii-console' => [
                'config/console.php',
            ],
            'yiisoft/yii-event' => [
                'config/console.php',
            ],
            '/' => [
                '$common',
                'console/*.php',
            ],
        ],
        'providers-console' => [
            'yiisoft/yii-console' => [
                'config/providers-console.php',
            ],
            '/' => [
                '$providers',
                'providers-console.php',
            ],
        ],
        'events' => [
            'yiisoft/yii-event' => [
                'config/events.php',
            ],
            '/' => [
                'events.php',
            ],
        ],
        'web' => [
            'yiisoft/yii-event' => [
                'config/web.php',
            ],
        ],
        'bootstrap' => [
            '/' => [
                'bootstrap.php',
            ],
        ],
        'bootstrap-console' => [
            '/' => [
                '$bootstrap',
                'bootstrap-console.php',
            ],
        ],
        'providers' => [
            '/' => [
                'providers.php',
            ],
        ],
        'delegates' => [
            '/' => [
                'delegates.php',
            ],
        ],
        'delegates-console' => [
            '/' => [
                '$delegates',
                'delegates-console.php',
            ],
        ],
    ],
    'dev' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
    'prod' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
    'test' => [
        'params' => [
            '/' => [
                'test/params.php',
            ],
        ],
    ],
];
