<?php

declare(strict_types=1);

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@runtime' => '@root/runtime',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => require __DIR__ . '/commands.php',
    ],
];
