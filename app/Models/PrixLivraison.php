<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrixLivraison extends Model
{
    use HasFactory;

    protected $fillable  =
    [
        'poids',
        'prix'
    ];
}
