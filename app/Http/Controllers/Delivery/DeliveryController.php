<?php

namespace App\Http\Controllers\Delivery;

use App\Models\Article;
use App\Models\Livraison;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImageLivraison;

class DeliveryController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function show($id) {
        $delivery = Livraison::find($id);
       $listeimagedelivery =  ImageLivraison::where('livraison_id', $delivery->id)->get();

        $lisearticle = Article::where('livraison_id', $delivery->id)->get();
        return view('delivery.show', compact('delivery', 'lisearticle', 'listeimagedelivery'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('delivery.liste');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(string $id)
    {
           $livraison = Livraison::find($id);

           if(!is_null($livraison) && !empty($livraison))
           {
                $listarticleliveaison = Article::where('livraison_id', $livraison->id)->get();

                if(!is_null($listarticleliveaison) && !empty($listarticleliveaison))
                {
                   $livraison->delete();
                   foreach($listarticleliveaison as $vlistarticleliveaison)
                   {
                    $vlistarticleliveaison->delete();
                   }

                   if(route('delivery.verify'))
                   {
                    return redirect()->route('home');
                   } else
                   {
                    return redirect()->back();
                   }
                } else
                {
                    abort(404);
                }
           } else
           {
            abort(404);
           }
    }
}
