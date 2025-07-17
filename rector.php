<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83;

$config = RectorConfig::configure()
    ->withPhpSets(php83: true)
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/test',
    ]);

return $config;
