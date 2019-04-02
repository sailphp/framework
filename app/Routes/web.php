<?php

use SailPHP\Http\Route;

/**
 * Route::get($path, $name, $controller@method)
 * 
 * @link https://symfony.com/doc/current/routing.html
 */

Route::get('/', 'home', 'HomeController@home');

Route::group(['prefix'  => 'profile'], function() {
    Route::get('{name}', 'profile', 'HomeController@test');
});