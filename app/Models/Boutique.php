<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug', 'image', 'adresse', 'pays', 'ville'];

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_boutique', 'category_id', 'boutique_id');
    }

    
}
