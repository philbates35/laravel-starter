<?php

declare(strict_types=1);

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->name('artisan')
    ->exclude(['bootstrap/cache', 'node_modules', 'storage'])
    ->notPath('public/frankenphp-worker.php');

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
