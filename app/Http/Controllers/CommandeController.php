<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //-----------function qui permet passer id du client par l'URL -------

    public function index(Request $req, $id)
    {
    
         $artisan = DB::table('users')->where('id', $id)->get() ;
       
       return view('commande',['Art'=>$artisan]);
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


    //-----------function qui permet ajouter une commande dans la base de donnee-------

    public function store(Request $request)
    {
        $id_art = $request->input('id_art');
        $id_cl = $request->input('id_cl');
        $titre = $request->input('titre');
        $desc = $request->input('description');
        $date = $request->input('date');
        $img = $request->input('image');
        
        $cmd = new \App\Models\Commandes();

        $cmd->id_client = $id_cl;
        $cmd->id_artisan = $id_art;
        $cmd->titre_commande = $titre;
        $cmd->description_commande = $desc;
        $cmd->image = $img;
        $cmd->date_commande = $date;
        
        
        $cmd->save();
        
        return redirect('http://127.0.0.1:8000/')->with('success','Merci pour votre commande');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function show(Commandes $commandes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function edit(Commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commandes $commandes)
    {
        //
    }
}
