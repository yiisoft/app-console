<?php

declare(strict_types=1);

return [
    'config-plugin' => [
        'params' => 'params.php',
        'params-console' => '$params',
        'di' => 'di/*.php',
        'di-console' => '$di',
        'di-delegates' => [],
        'di-delegates-console' => '$di-delegates',
        'di-providers' => [],
        'di-providers-console' => '$di-providers',
        'events' => [],
        'events-console' => '$events',
        'bootstrap' => [],
        'bootstrap-console' => '$bootstrap',
    ],
    'config-plugin-environments' => [
        'dev' => [
            'params' => [
                'environments/dev/params.php',
            ],
        ],
        'prod' => [
            'params' => [
                'environments/prod/params.php',
            ],
        ],
        'test' => [
            'params' => [
                'environments/test/params.php',
            ],
        ],
    ],
    'config-plugin-options' => [
        'source-directory' => 'config',
    ],
];
