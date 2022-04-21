<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $cmd = 'commande';
    protected $fillable = [
        'id_artisan',
        'id_client',
        'titre_commande',
        'description_commande',
        'image',
        'date_commande'];

}
