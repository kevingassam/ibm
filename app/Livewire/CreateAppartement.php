<?php

namespace App\Livewire;

use App\Models\Appartement;
use Livewire\Component;

class CreateAppartement extends Component
{
    public $nom,$projet,$appartements,$type;

    public function mount($projet){
        $this->projet = $projet;
        $this->appartements = Appartement::where('projet_id', $projet->id)->get();
    }

    public function save(){
        // Save the appartement to the database
        $appartement = new Appartement();
        $appartement->nom = $this->nom;
        $appartement->projet_id = $this->projet->id;
        $appartement->type = $this->type;  
        $appartement->save();

        // Reset the form
        $this->reset(['nom']);
        $this->appartements->push($appartement); // Add the new appartement to the list of appartements

    }

    public function delete($id){
        Appartement::destroy($id);
        $this->appartements = $this->appartements->filter(function ($appartement) use ($id) {
            return $appartement->id!= $id;
        });
    }

    public function render()
    {
        return view('livewire.create-appartement');
    }
}
