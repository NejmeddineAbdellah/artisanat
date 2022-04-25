<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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
        $email = $request->email;
        $password = $request->password;
        
        
       
        
        try {
            $artisan = new \App\Models\User();
            $img=$request->file('avatar');
        $rename_image=time().'.'.$img->getClientOriginalExtension();
        $des=public_path('storage/users');
        $img->move($des,$rename_image);
        
        $artisan->name=$nom;
        $artisan->nom=$nom;
        $artisan->prenom=$prenom;
        $artisan->email=$email;
        $artisan->phone=$telephone;
        $artisan->avatar=$rename_image;
        $artisan->metier=$metier;
        $artisan->role_id='4';
        $artisan->password=bcrypt($password); 

        
            /*
        $destination_path= 'public/storage/users';
        $file=$request->file('avatar');
        $file_name = $file->getClientOriginalName();
        $file_path = $request->file('avatar')->store($destination_path,$file_name);
        $input['avatar'] = $file_name;

*/
            $artisan->save();
            return redirect('/')->with('success','votre compte Artisan à été crée avec succès');
        } catch (\Exception $e) {
             
             return redirect('http://127.0.0.1:8000/inscrire_artisan')->with('success','Cette email est deja utilisé vous devrez  tapez un autre email !');
            
        }
       
        
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
