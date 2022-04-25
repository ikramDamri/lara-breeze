<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use Livewire\Component;
use App\Models\Parcelle;
use Illuminate\Support\Facades\DB;

class Parcelles extends Component
{
    public $isOpen = 0;
    public $parcelle, $Par_Idf,$Par_Nom,$Par_Lieu,$Par_Superficie,$Par_Prop, $agr;
    public function render()
    {
        $this->parcelle = Parcelle::all();
        $this->agr = DB::table('agriculteurs')->get();
        return view('livewire.parcelles');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function cancel()
    {

        $this->Par_Nom = '';
        $this->Par_Lieu = '';
        $this->Par_Superficie = '';
        $this->Par_Prop = '';
    }

    private function resetInputFields()
    {
        $this->Par_Nom = '';
        $this->Par_Lieu = '';
        $this->Par_Superficie = '';
        $this->Par_Prop = '';
    }

    public function store()
    {
        $this->validate([
            'Par_Nom' => 'required',
            'Par_Lieu' => 'required',
            'Par_Superficie' => 'required',
            'Par_Prop' => 'required'
        ]);

        Parcelle::updateOrCreate(['Par_Nom' => $this->Par_Nom ,'Par_Lieu' => $this->Par_Lieu , 'Par_Superficie' => $this->Par_Superficie
        ,'Par_Prop' => $this->Par_Prop]);
        session()->flash('message',
        $this->Par_Idf ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Parc = Parcelle::findOrFail($id);
        $this->Par_Idf = $id;
        $this->Par_Nom = $Parc->Par_Nom;
        $this->Par_Lieu= $Parc->Par_Lieu;
        $this->Par_Superficie= $Parc->Par_Superficie;
        $this->Par_Prop= $Parc->Par_Prop;
        $this->openModal();
    }
    public function update(){
        Parcelle::where('id', $this->Par_Idf)
      ->update(['Par_Nom' => $this->Par_Nom,
                'Par_Lieu' => $this->Par_Lieu,
                'Par_Superficie' => $this->Par_Superficie,
                'Par_Prop' => $this->Par_Prop
                 ]);
    }
    public function delete($id)
    {
        Parcelle::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

}
