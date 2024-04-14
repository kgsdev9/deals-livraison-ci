<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Livraison;
use Illuminate\Support\Facades\Auth;

class ListeDelivery extends Component
{

    public $search = "";
    public function render()
    {

          //dd(Auth::user()->role->libelle == "admin");
          if(Auth::user()->role->libelle == "user") {
            $listedelivery =Livraison::where('code_livraison', 'like', '%'.$this->search.'%')->where('user_id', Auth::user()->id)->get();
         } else
         {
             $listedelivery =Livraison::where('code_livraison', 'like', '%'.$this->search.'%')->get();
         }

        return view('livewire.liste-delivery', [
            'listedelivery'=> $listedelivery
        ]);
    }
}
