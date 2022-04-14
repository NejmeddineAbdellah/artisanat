<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{ 
    use HasFactory;
    protected $client = 'clients';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'tele',
        'password'];

   
}
