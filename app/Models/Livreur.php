<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'whatsApp',
        'photo',
        'adresse',
    ];


    public function communes() {
        return $this->belongsToMany(Commune::class, 'commune_livreur', 'livreur_id', 'commune_id');
    }
}
