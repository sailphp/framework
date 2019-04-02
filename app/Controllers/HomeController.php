<?php

namespace App\Controllers;

use SailPHP\Controller\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $user = \App\Models\User::all();

        addViewGlobal('somename', 'hello');

        echo view('test', array(
            'variable'  => 'Hello from Twig',
            'route'     => url('profile', array('name'  => 'brad'))
        ));
    }

    public function test($name)
    {
        echo 'Hello: '.$name;
    }
}