<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'paymentstatus',
        'code_livraison',
        'telephone',
        'date_livraison',
        'adresse',
        'user_id',
        'country_id',
        'city_id',
        'status'
    ];

    public function countLivraisonForCountryCity($cityId, $countryid)
    {
        return Livraison::where('city_id', $cityId)->where('country_id', $countryid)->count();
    }

    public function city()  {
        return $this->belongsTo(City::class, 'city_id');
    }


    public function country()  {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
