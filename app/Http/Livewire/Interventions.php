<?php

namespace App\Http\Livewire;

use App\Models\Intervention;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Interventions extends Component
{
    public $isOpen = 0;
    public $intervention, $emp, $parc, $Int_Debut, $Int_Emp_Nss, $Int_Par_Id, $Int_Nb_Jours;
    public function render()
    {
        $this->intervention = Intervention::all();
        $this->emp = DB::table('employes')->get();
        $this->parc = DB::table('parcelles')->get();
        return view('livewire.interventions');
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
        $this->Int_Debut = '';
        $this->Int_Emp_Nss = '';
        $this->Int_Par_Id = '';
        $this->Int_Nb_Jours = '';
    }

    private function resetInputFields()
    {
        $this->Int_Debut = '';
        $this->Int_Emp_Nss = '';
        $this->Int_Par_Id = '';
        $this->Int_Nb_Jours = '';
    }

    public function store()
    {
        $this->validate([
            'Int_Debut' => 'required',
            'Int_Emp_Nss' => 'required',
            'Int_Par_Id' => 'required',
            'Int_Nb_Jours' => 'required'
        ]);

        Intervention::updateOrCreate(['Int_Debut' => $this->Int_Debut, 'Int_Emp_Nss' => $this->Int_Emp_Nss, 'Int_Par_Id' => $this->Int_Par_Id, 'Int_Nb_Jours' => $this->Int_Nb_Jours]);
        session()->flash(
            'message',
            $this->Int_Debut ? 'Agr Updated Successfully.' : 'Agr Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Inter = Intervention::findOrFail($id);
        $this->Int_Debut = $id;
        $this->Int_Par_Id = $Inter->Int_Par_Id;
        $this->Int_Emp_Nss = $Inter->Int_Emp_Nss;
        $this->Int_Nb_Jours = $Inter->Int_Nb_Jours;

        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'Int_Debut' => 'required',
            'Int_Emp_Nss' => 'required',
            'Int_Par_Id' => 'required',
            'Int_Nb_Jours' => 'required'
        ]);

        Intervention::find($this->Int_Debut)->update([
            'Int_Emp_Nss' => $this->Int_Emp_Nss,
            'Int_Par_Id' => $this->Int_Par_Id,
            'Int_Nb_Jours' => $this->Int_Nb_Jours
        ]);
    }
    public function delete($id)
    {
        if ($id) {
            Intervention::find($id)->delete();
            session()->flash('message', 'Post Deleted Successfully.');
        }
    }
}
