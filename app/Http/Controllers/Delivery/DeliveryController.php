<?php

namespace App\Http\Controllers\Delivery;

use App\Models\Article;
use App\Models\Livraison;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function show($id) {
        $delivery = Livraison::find($id);
        $lisearticle = Article::where('livraison_id', $delivery->id)->get();
        return view('delivery.show', compact('delivery', 'lisearticle'));
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
    public function destroy(string $id)
    {
        //
    }
}
