<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // to oepn home page
    public function home()
    {
        return view('index');
    }

    // to open registeration page
    public function registerationView()
    {
        return view('registeration_page');
    }

    // to open login page

    public function loginView()
    {
        return view('login_page');
    }
}