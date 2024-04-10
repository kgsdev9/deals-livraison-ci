<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Livreur;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', [
            'allLivreurs' => User::all(),
            'allCommunes' => User::all()
        ]);
    }

    public function deliveryprice() {
        return view('dashboard.gestionlivraison.index');
    }


}
