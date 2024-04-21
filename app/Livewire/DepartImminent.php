<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;
use App\Models\Livraison;
use Livewire\WithPagination;

class DepartImminent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $listedeparts = Livraison::orderByDesc('created_at')->paginate(20);
        return view('livewire.depart-imminent', [
            'listedeparts' => $listedeparts,
            'listecountry' => Country::all(),
            'listecity' => City::all()
        ]);
    }
}
//compact('listedeparts')
