<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Livraison;
use Illuminate\Http\Request;
use App\Models\ImageLivraison;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function invoicedelivery($id)
    {
        $delivery = Livraison::find($id);
        $listeimagedelivery =  ImageLivraison::where('livraison_id', $delivery->id)->get();
        $lisearticle = Article::where('livraison_id', $delivery->id)->get();
        $pdf = Pdf::loadView('print.livraison.deliveryprint', [
            'delivery'=> $delivery,
            'listeimagedelivery'=> $listeimagedelivery,
            'lisearticle' => $lisearticle
        ])->setPaper('a4', 'landscape');
        return $pdf->download('livraison.pdf');
    }

}
