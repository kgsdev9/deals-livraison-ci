<?php

namespace App\Http\Controllers\Livreurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    


    public function registerLivreur() {
        return view('dashboard.livreurs.register');
    }
}
