<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //----------function permet d'afficher la page inscrire_artisan
    public function index()
    {
        return view("inscrire_artisan");
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     //------------function permet de sauvgarder le compte artisan dans la base de donnee
    public function store(Request $request)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $telephone = $request->telephone;
        $metier = $request->metier;
        $avatare = $request->avatare;
        $email = $request->email;
        $password = $request->password;
       
        
        $artisan = new \App\Models\User();
        
        $artisan->name=$nom;
        $artisan->nom=$nom;
        $artisan->prenom=$prenom;
        $artisan->email=$email;
        $artisan->phone=$telephone;
        $artisan->avatar=$avatare;
        $artisan->metier=$metier;
        $artisan->role_id='4';
        $artisan->password=bcrypt($password);
        
        $artisan->save();
        
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
