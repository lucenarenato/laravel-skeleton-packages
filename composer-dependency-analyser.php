<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021-2025 guanguans<ityaozm@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/guanguans/laravel-skeleton
 */

use ShipMonk\ComposerDependencyAnalyser\Config\Configuration;
use ShipMonk\ComposerDependencyAnalyser\Config\ErrorType;

return (new Configuration)
    ->addPathsToScan(
        [
            __DIR__.'/app/',
            __DIR__.'/bootstrap/',
            __DIR__.'/config/',
            __DIR__.'/database/',
            __DIR__.'/public/',
            __DIR__.'/resources/',
            __DIR__.'/routes/',
            __DIR__.'/tests/',
        ],
        false
    )
    ->addPathsToExclude([
        __DIR__.'/app/Support/Rectors/',
        __DIR__.'/tests/',
    ])
    ->ignoreErrors([
        ErrorType::UNUSED_DEPENDENCY,
        ErrorType::SHADOW_DEPENDENCY,
    ])
    ->ignoreErrorsOnPackages(
        [
            'guanguans/ai-commit',
        ],
        [ErrorType::DEV_DEPENDENCY_IN_PROD]
    )
    ->ignoreErrorsOnPaths(
        [
            __DIR__.'/app/Providers/PackageServiceProvider.php',
            // __DIR__.'/app/Providers/UnlessProductionAggregateServiceProvider.php',
            __DIR__.'/app/Providers/WhenLocalAggregateServiceProvider.php',
            __DIR__.'/app/Providers/WhenTestingAggregateServiceProvider.php',
        ],
        [
            ErrorType::DEV_DEPENDENCY_IN_PROD,
        ]
    );
