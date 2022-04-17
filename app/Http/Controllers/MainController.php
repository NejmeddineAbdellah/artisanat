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

}
