<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Users;

class MainController extends Controller
{
    

    public function accueil(Request $request)
    {
       // $value = $request->session()->pull('client');

        

            return view("index");

        

     
    }

}
