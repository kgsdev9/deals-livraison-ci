<?php

namespace App\Http\Controllers;

use App\Models\ImageLivraison;
use App\Models\User;
use App\Models\Livraison;
use App\Models\PrixLivraison;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

      /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $livraison  = Livraison::where('user_id', Auth::user()->id)->count();
        $deliveryImage = ImageLivraison::where('livraison_id', $livraison)->get();
        $alllivraisons  = Livraison::count();
        $listepricelivraisons  = PrixLivraison::count();
        $countusers  = User::count();
        return view('dashboard.index', compact('livraison', 'countusers', 'alllivraisons', 'listepricelivraisons'));
    }

}
