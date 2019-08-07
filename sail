#!/usr/bin/env php

<?php

use SailPHP\Console\Application;
use SailPHP\Foundation\Config;
use Illuminate\Database\Capsule\Manager;

require __DIR__.'/vendor/autoload.php';

$application = new Application(
    array(
        'base' => __DIR__.'/..',
        'app'   => __DIR__.'/../app',
        'public' => __DIR__ . '/../public',
        'storage' => __DIR__ . '/../storage'
    ),
    [
    'config'   => new Config()
]);

$application->run();