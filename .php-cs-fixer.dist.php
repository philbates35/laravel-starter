<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->name('artisan')
    ->notPath('bootstrap/cache');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS' => true,
        '@PER-CS:risky' => true,
        '@PHP80Migration:risky' => true,
        '@PHP83Migration' => true,
        '@PHPUnit100Migration:risky' => true,
    ])
    ->setFinder($finder);
