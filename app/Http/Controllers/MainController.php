<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    

    public function accueil()
    {
        return view("index");
    }

    public function artisan()
    {
        return view("artisan");
    }

    public function client()
    {
        return view("client");
    }

    public function clientAuthentifier()
    {
        return view("login_client");
    }

}
