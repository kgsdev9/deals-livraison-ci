<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Livreur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', [
            'allLivreurs' => Livreur::all(),
            'allCommunes' => Commune::all()
        ]);
    }


}
