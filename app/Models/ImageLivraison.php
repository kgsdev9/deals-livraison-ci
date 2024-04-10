<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageLivraison extends Model
{
    use HasFactory;

    protected $fillable  = ['image', 'livraison_id'];

    
}
