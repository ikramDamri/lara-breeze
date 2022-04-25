<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Agriculteur;

class Agriculteurs extends Component
{
    public $isOpen = 0;
    public $agriculteur , $Agr_Id , $Agr_Nom , $Agr_Prn , $Agr_Resid;
    public function render()
    {
        //$this->agriculteur = DB::table('agriculteurs')->get();
        $this->agriculteur = Agriculteur::all();
        return view('livewire.agriculteurs');
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

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->post_id = '';
    }

    public function store()
    {
        $this->validate([
            'Agr_Nom' => 'required',
            'Agr_Prn' => 'required',
            'Agr_Resid' => 'required'
        ]);

        Agriculteur::updateOrCreate(['Agr_Nom' => $this->Agr_Nom ,'Agr_Prn' => $this->Agr_Prn , 'Agr_Resid' => $this->Agr_Resid]);
        session()->flash('message',
        $this->Agr_Id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Agri = Agriculteur::findOrFail($id);
        $this->Agr_Id = $id;
        $this->Agr_Prn = $Agri->Agr_Prn;
        $this->Agr_Nom = $Agri->Agr_Nom;
        $this->Agr_Resid = $Agri->Agr_Resid;

        $this->openModal();
    }

    public function cancel()
    {
        $this->Agr_Nom = '';
        $this->Agr_Prn = '';
        $this->Agr_Resid = '';
    }

    public function update(){
        Agriculteur::where('id', $this->Agr_Id)
      ->update(['Agr_Nom' => $this->Agr_Nom,
                'Agr_Prn' => $this->Agr_Prn,
                'Agr_Resid' => $this->Agr_Resid
                 ]);
    }
    public function delete($id)
    {
        Agriculteur::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }












    public $message = '';
    public function show()
  {
      //Parcelle::all();
      $this->message = "You clicked on button";
      //return redirect()->to('/parcelles');

      //return view('livewire.parcelle.home');
      //return redirect()->route('parcelles',['agriculteur' => $id]);

  }
}

