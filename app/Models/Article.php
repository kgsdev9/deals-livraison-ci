<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'poids',
        'livraison_id',
        'pu'
    ];


    public function singlepricedelivery() {
        return $this->belongsTo(PrixLivraison::class, 'prixlivraison_id');
    }

    public function livraison() {
        return $this->belongsTo(Livraison::class, 'livraison_id');
    }

}
