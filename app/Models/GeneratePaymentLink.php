<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratePaymentLink extends Model
{
    use HasFactory;

    protected $fillable  = ['designation', 'prix', 'lien' , 'nom', 'prenom', 'email'];

    
}
