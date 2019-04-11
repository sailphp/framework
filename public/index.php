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
        // 'csrf'      => new Symfony\Component\Security\Csrf\CsrfTokenManager(
        //     null,
        //     new SailPHP\Session\Security\CsrfTokenManagerAdapter()
        // ),
        'database'  => new Illuminate\Database\Capsule\Manager()
    )
);
// Because template uses paths that we need to have set
container()->bind('template', new SailPHP\Html\Template());

$app->listen();