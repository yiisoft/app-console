<?php

declare(strict_types=1);

use ShipMonk\ComposerDependencyAnalyser\Config\Configuration;
use ShipMonk\ComposerDependencyAnalyser\Config\ErrorType;

return (new Configuration())
    ->disableComposerAutoloadPathScan()
    ->setFileExtensions(['php'])
    ->addPathToScan(__DIR__ . '/config', isDev: false)
    ->addPathToScan(__DIR__ . '/src', isDev: false)
    ->addPathToScan(__DIR__ . '/yii', isDev: false)
    ->addPathToScan(__DIR__ . '/tests', isDev: true)
    ->addPathsToExclude([__DIR__ . '/tests/Support/_generated'])
    ->ignoreErrorsOnPackages(
        ['psr/container', 'yiisoft/config'],
        [ErrorType::PROD_DEPENDENCY_ONLY_IN_DEV],
    )
    ->ignoreErrorsOnPackage('yiisoft/di', [ErrorType::UNUSED_DEPENDENCY])
    ->ignoreErrorsOnPackage('yiisoft/aliases', [ErrorType::UNUSED_DEPENDENCY])
    ->ignoreErrorsOnPackage('yiisoft/aliases', [ErrorType::UNUSED_DEPENDENCY]);
