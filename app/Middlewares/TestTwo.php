<?php

namespace App\Middlewares;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SailPHP\Http\Middleware;

class TestTwo extends Middleware
{
    public function handle($params = array())
    {
        echo '<br />Two';
    }
}