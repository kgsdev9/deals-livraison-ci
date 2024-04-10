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
        return view('livewire.liste-delivery', [
            'listedelivery'=> Livraison::where('code_livraison', 'like', '%'.$this->search.'%')->where('user_id', Auth::user()->id)->get()
        ]);
    }
}
