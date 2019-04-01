<?php

namespace App\Controllers;

use SailPHP\Controller\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $user = \App\Models\User::all();

        echo view('test', array(
            'variable'  => 'Hello from Twig',
            'route'     => url('tester')
        ));
    }
}