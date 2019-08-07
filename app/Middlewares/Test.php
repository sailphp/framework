<?php

namespace App\Middlewares;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SailPHP\Http\Middleware;

class Test extends Middleware
{
    public function handle()
    {
        echo 'One<br />';
        return;
    }
}