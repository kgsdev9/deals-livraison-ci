<?php

namespace App\Livewire;

use App\Models\PrixLivraison;
use Livewire\Component;

class DeliveryPrice extends Component
{

    protected $rules = [
        'poids' => 'required',
        'prix' => 'required'
    ];


    public $dispkayform = true;
    public $poids, $prix, $search = "", $pricelivraisonId;

    public function displayform() {
        $this->dispkayform = false;
    }


    public function edit($id){
        try {
            $prixlivraison = PrixLivraison::findOrFail($id);
            if( !$prixlivraison) {
                session()->flash('error','Aucun post trouvé');
            } else {
                $this->prix = $prixlivraison->prix;
                $this->poids = $prixlivraison->poids;
                $this->pricelivraisonId = $prixlivraison->id;
                $this->dispkayform = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Oups!!');
        }

    }


    public function  store()
    {
        $this->validate();

        PrixLivraison::create([
            'prix'=> $this->prix,
            'poids'=> $this->poids,
        ]);
        $this->dispkayform = true;
    }


    public function cancel() {
        $this->dispkayform = true;
    }

    public function resetFields(){
        $this->poids = '';
        $this->prix = '';
    }

    public function update()
    {
        $this->validate();
        try {
            PrixLivraison::whereId($this->pricelivraisonId)->update([
            'prix'=> $this->prix,
            'poids'=> $this->poids,
            ]);
            session()->flash('success','Prix de livraison modifié avec success!!');
            $this->resetFields();
            $this->dispkayform = true;
        } catch (\Exception $ex) {
            session()->flash('success','Pous!!');
        }
    }

    public function delete($id)
    {
        try{
            PrixLivraison::find($id)->delete();
            session()->flash('success',"Prix de livraison avec succes!!");
        }catch(\Exception $e){
            session()->flash('error',"Oups!");
        }
    }


    public function render()
    {
        return view('livewire.delivery-price', [
            'gestionlivraisons'=> PrixLivraison::where('poids', 'like', '%'.$this->search.'%')->get()

        ]);
    }
}
