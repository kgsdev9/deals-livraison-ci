<?php

namespace App\Livewire;

use App\Models\Commune;
use App\Models\Livreur;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterLivreur extends Component
{
    use WithFileUploads;

    public $nom ;
    public $prenom ;
    public $telephone ;
    public  $whatsapp;
    public $photo ;
    public $adresse ;
    public $commune = [];

    protected $rules =  [
        'nom' => 'required',
        'prenom' => 'required',
        'whatsapp' => 'required',
        'photo' => 'required',
        'adresse' => 'required',
    ];


    public function save() {

        $this->validate();
        $photo =   $this->photo->store('public/photo');

      $livreur = Livreur::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'telephone' => $this->telephone,
            'whatsApp' => $this->whatsapp,
            'photo' => $photo,
            'adresse' => $this->adresse,
        ]);

        $livreur->communes()->sync($this->commune);
        return redirect()->to('/');
    }


    public function render()
    {
        return view('livewire.register-livreur', [
            'allCommunes' => Commune::all()
        ]);
    }
}
