<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Livraison;
use Illuminate\Http\Request;

class SuiviLivraison extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function verified(Request $request)
    {
        $livraison  =  Livraison::where('code_livraison', trim($request->code))->first();

        if(!is_null($livraison) && !empty($livraison))
        {
            $listearticlelivraison = Article::where('livraison_id', $livraison->id)->get();
        }

        if(is_null($livraison) &&  empty($livraison))
        {
            return view('suivi', [
                'livraison' => $livraison,
            ]);
        }

        if(!is_null($listearticlelivraison) && !empty($listearticlelivraison))
        {
            return view('suivi', [
                'livraison' => $livraison,
                'listearticlelivraison' => $listearticlelivraison
            ]);
        } else {
            abort(404);
        }

        }

    public function response(Request $request)
    {

    }
}
