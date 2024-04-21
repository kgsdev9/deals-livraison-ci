<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserListe extends Component
{
    public $displayform = true;
    public $name, $email, $password, $search = "", $userId, $role_id;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'role_id' => 'required',
        'password' => 'required'
    ];

    public function displayFormulaire()
    {
        $this->displayform = false;
    }

    public function edit($id){
        try {
            $user = User::findOrFail($id);
            if(!$user) {
                session()->flash('error','Aucun post trouvé');
            } else {
                $this->name = $user->name;
                $this->email = $user->email;
                $this->role_id = $user->role_id;
                $this->password = $user->password;
                $this->userId = $user->id;
                $this->displayform = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Oups!!');
        }
    }

    public function  store()
    {
        $this->validate();
        User::create([
            'name'=> $this->name,
            'email'=>  $this->email,
            'role_id'=>  $this->role_id,
            'password'=>  Hash::make($this->password),
        ]);
        $this->displayform = true;
    }


    public function cancel() {
        $this->displayform = true;
    }

    public function resetFields(){
        $this->name ="";
        $this->email = "";
        $this->password = "";
        $this->userId = "";
        $this->role_id = "";
    }

    public function update()
    {
        $this->validate();
        try {
            User::whereId($this->userId)->update([
            'name'=> $this->name,
            'email'=>  $this->email,
            'role_id'=>  $this->role_id,
            'password'=>  Hash::make($this->password),
            ]);
            session()->flash('success','Modifié avec success!!');
            $this->resetFields();
            $this->displayform = true;
        } catch (\Exception $ex) {
            session()->flash('success','Pous!!');
        }
    }

    public function delete($id)
    {
        try{
            User::find($id)->delete();
            session()->flash('success',"Prix de livraison avec succes!!");
        }catch(\Exception $e){
            session()->flash('error',"Oups!");
        }
    }

    public function render()
    {
        return view('livewire.user-liste', [
            'allUsers'=> User::where('name', 'like', '%'.$this->search.'%')->get(),
            'allRoles' => Role::all()
        ]);
    }
}
