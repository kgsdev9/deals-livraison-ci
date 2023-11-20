<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $commune  = ['nom', 'image','slug'];

    public function livreurs() {
        return $this->belongsToMany(Livreur::class, 'commune_livreur', 'commune_id','livreur_id');
    }
}
