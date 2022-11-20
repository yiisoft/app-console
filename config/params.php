<?php

declare(strict_types=1);

use App\Command\HelloCommand;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@runtime' => '@root/runtime',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            HelloCommand::$defaultName => HelloCommand::class,
        ],
    ],
];
