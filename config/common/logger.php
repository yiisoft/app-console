<?php

declare(strict_types=1);

use Psr\Log\LoggerInterface;
use Yiisoft\Definitions\ReferencesArray;
use Yiisoft\Log\Logger;
use Yiisoft\Log\Target\File\FileTarget;

return [
    LoggerInterface::class => [
        'class' => Logger::class,
        '__construct()' => [
            'targets' => ReferencesArray::from([FileTarget::class]),
        ],
    ],
];
