<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Users;

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

    public function clientinscrire(){
        
      

        return view("inscription_cl");
    }
    public function create(){
    
        return view("testets");
    }

}
