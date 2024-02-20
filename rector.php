<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withRootFiles()
    // Larastan's bootstrap file doesn't run when Rector boots PHPStan, so we need to include it manually. See:
    //   * https://github.com/rectorphp/rector/issues/8006
    //   * https://github.com/larastan/larastan/issues/1664#issuecomment-1637152828
    ->withBootstrapFiles([__DIR__ . '/vendor/larastan/larastan/bootstrap.php'])
    // All extensions except PHPStan bleeding edge. See:
    //   * https://github.com/rectorphp/rector/issues/8492#issuecomment-1944428821
    ->withPHPStanConfigs([
        __DIR__ . '/phpstan.neon.dist',
    ])
    ->withPhpSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withSets([
        LaravelSetList::LARAVEL_100,
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_FACADE_ALIASES_TO_FULL_NAMES,
        LaravelSetList::LARAVEL_ELOQUENT_MAGIC_METHOD_TO_QUERY_BUILDER,

        PHPUnitSetList::PHPUNIT_100,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        PHPUnitSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ])
    ->withSkip([
        __DIR__ . '/bootstrap/cache',

        // TODO Stop skipping this rule as soon as phpcs supports typed const
        //     See: https://github.com/PHPCSStandards/PHP_CodeSniffer/issues/106
        AddTypeToConstRector::class,
    ]);
