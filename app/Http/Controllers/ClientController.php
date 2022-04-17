<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //-----------function qui return view "inscription_cl"-------
    public function index()
    {
        return view("inscrire_client");
    }


    //-----------function qui return view "login_client"-------
    public function clientAuthentifier()
    {
        return view("login_client");
    }

    public function clientlogin(Request $request)
    {   
        $email = $request->email;
        $password = $request->pass;
        if (DB::table('clients')->where(['email' => $email, 'password' => $password])->exists()) 
        {
            // ...
            return view("index");
        }
        
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //-----------function qui permet d'ajouter client a la base de donneé-------
    public function store(Request $request)
    {
      
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $telephone = $request->telephone;
        $password = $request->pass;
        
        $client = new \App\Models\Clients();
        
        $client->nom=$nom;
        $client->prenom=$prenom;
        $client->email=$email;
        $client->tele=$telephone;
        $client->password=bcrypt($password);
        
        $client->save();
        
        return redirect('/');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
