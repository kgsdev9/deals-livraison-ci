<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\User;
use App\Models\Article;
use App\Models\Country;
use Livewire\Component;
use App\Models\Livraison;
use App\Models\PrixLivraison;
use App\Models\ImageLivraison;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisterNewLivraison;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class DeliveryComponent extends Component
{

    use  WithFileUploads;

    public $designation = "";
    public $pu;
    public $poids= "";
    public $country_id= "";
    public $city_id = "";
    public $price_livraison= "";
    public $resetprice = "";
    public $nom_destinataire ;
    public $prenom_destinataire ;
    public $telephone ;
    public $adresse;
    public $quantite = 1;
    public $poidscolis = "";
    public $images = [];
    public $tableau = [];

    protected $rules = [
        'city_id' => 'required',
        'country_id' => 'required',
        'nom_destinataire' => 'required',
        'prenom_destinataire'  => 'required',
        'images'  => 'required',
        'telephone'  => 'required'
    ];

    public function changeEvent($id)
    {
        $pricelivraison =   PrixLivraison::where('id', $id)->first();
        $this->pu =  $pricelivraison->prix ;
        $this->poids =  $pricelivraison->poids ;
    }

    public function saveProducts()
    {
        $this->tableau[] = ['designation' => $this->designation, 'prix' => (int)$this->pu * (int)$this->quantite, 'poids' => $this->poids, 'quantite' => $this->quantite];
        $this->resetField();
    }

    public function resetField()
    {
        $this->pu = "";
        $this->poidscolis = "";
        $this->quantite = 1;
        $this->designation = "";

    }

    public function remove($index)
    {
        unset($this->tableau[$index]);
        $this->tableau = array_values($this->tableau); // Réorganiser les clés du tableau
    }

    public function saveLivraison()
    {

        $this->validate();

        $livraison =   Livraison::create([
            'code_livraison'=> rand(1000, 2000),
            'date_livraison'=> now(),
            'nom' => $this->nom_destinataire,
            'prenom' => $this->prenom_destinataire,
            'adresse' => $this->adresse,
            'telephone' =>  $this->telephone,
            'user_id' => Auth::user()->id,
            'country_id' => $this->country_id,
            'city_id' => $this->city_id,
            ]);

        foreach($this->images as $photo)
        {
            $imge = $photo->store('delivery');
            ImageLivraison::create([
                        'image' =>$imge,
                        'livraison_id' => $livraison->id
                    ]);
        }

        foreach($this->tableau as $varticle)
        {
            Article::create([
                'designation' => $varticle['designation'],
                'livraison_id' => $livraison->id,
                'quantite' => (int)$varticle['quantite'],
                'pu' => (int)$varticle['prix'] * (int)$varticle['quantite'] ,
                'poids' => $varticle['poids'],
            ]);
        }

        // $this->notify((new RegisterNewLivraison()));

        //User::find(Auth::user()->id)->notify(new RegisterNewLivraison());

        return redirect()->to('/delivery/show/'. $livraison->id);
    }

    public function render()
    {
        return view('livewire.delivery-component', [
            'alldeleveryprice' => PrixLivraison::all(),
            'listeproducts' => $this->tableau,
            'allCities'=> City::all(),
            'allCountries'=> Country::all(),
        ]);
    }
}
