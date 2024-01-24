<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassConst\AddTypeToConstRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Privatization\Rector\Class_\FinalizeClassesWithoutChildrenRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->skip([
        __DIR__ . '/bootstrap/cache',
    ]);

    // Larastan's bootstrap file doesn't run when Rector boots PHPStan, so we need to include it manually. See:
    //   * https://github.com/rectorphp/rector/issues/8006
    //   * https://github.com/larastan/larastan/issues/1664#issuecomment-1637152828
    $rectorConfig->bootstrapFiles([__DIR__ . '/vendor/larastan/larastan/bootstrap.php']);
    $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon.dist');

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_83,

        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::STRICT_BOOLEANS,
        SetList::PRIVATIZATION,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN,
        SetList::INSTANCEOF,

        LaravelSetList::LARAVEL_100,
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_FACADE_ALIASES_TO_FULL_NAMES,
        LaravelSetList::LARAVEL_ELOQUENT_MAGIC_METHOD_TO_QUERY_BUILDER,

        PHPUnitSetList::PHPUNIT_100,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        PHPUnitSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ]);

    $rectorConfig->skip([
        // Enforcing final on everything doesn't really offer much value, and stops up from
        // mocking a concrete class, in the rare occasion we need to do so.
        FinalizeClassesWithoutChildrenRector::class,

        // TODO Stop skipping this rule as soon as phpcs supports typed const
        //     See: https://github.com/PHPCSStandards/PHP_CodeSniffer/issues/106
        AddTypeToConstRector::class,
    ]);
};
