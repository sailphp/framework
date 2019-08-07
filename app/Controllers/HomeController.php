<?php

namespace App\Controllers;

use SailPHP\Controller\Controller;
use App\Mail\OrderShipped;
use SailPHP\Mail\Mailer;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function home()
    {

        echo view('home', array());
    }
}