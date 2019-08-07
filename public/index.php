<?php

require '../vendor/autoload.php';

$app = new SailPHP\Foundation\App(
    array(
        'base' => __DIR__.'/..',
        'app'   => __DIR__.'/../app',
        'public' => __DIR__ . '/../public',
        'storage' => __DIR__ . '/../storage'
    ),
    array(
        'config'    => new SailPHP\Foundation\Config,
        'request'   => new SailPHP\Http\Request,
        'response'  => new SailPHP\Http\Response,
        'router'    => new SailPHP\Http\Router,
        'session'   => new SailPHP\Session\Session(
            new SailPHP\Session\SessionAdapter()
        ),
        'database'  => new Illuminate\Database\Capsule\Manager()
    )
);

// Enable Auth
container()->bind('auth', new SailPHP\Auth\Auth(
    new SailPHP\Auth\SessionAuthAdapter()
));


container()->bind('template', new SailPHP\Html\Template($app, 'twig'));
$app->listen();