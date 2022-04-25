<?php

namespace App\Http\Livewire;

use App\Models\Employe;
use App\Models\Tarif;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Employes extends Component
{
    public $isOpen = 0;
    public $employe, $tarif, $Emp_Nss, $Emp_Nom, $Emp_Prn, $Emp_Tarif;
    public function render()
    {
        $this->employe = Employe::all();
        $this->tarif = DB::table('tarifs')->get();

        return view('livewire.employes');
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
        $this->Emp_Nss = '';
        $this->Emp_Nom = '';
        $this->Emp_Prn = '';
        $this->Emp_Tarif = '';
    }

    private function resetInputFields()
    {
        $this->Emp_Nss = '';
        $this->Emp_Nom = '';
        $this->Emp_Prn = '';
        $this->Emp_Tarif = '';
    }
    public function store()
    {
        $this->validate([
            'Emp_Nss' => 'required',
            'Emp_Nom' => 'required',
            'Emp_Prn' => 'required',
            'Emp_Tarif' => 'required'
        ]);

        Employe::updateOrCreate(['Emp_Nss' => $this->Emp_Nss, 'Emp_Nom' => $this->Emp_Nom, 'Emp_Prn' => $this->Emp_Prn, 'Emp_Tarif' => $this->Emp_Tarif]);
        session()->flash(
            'message',
            $this->Emp_Nss ? 'Employe Updated Successfully.' : 'Employe Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Emp = Employe::findOrFail($id);
        $this->Emp_Nss = $id;
        $this->Emp_Nom = $Emp->Emp_Nom;
        $this->Emp_Prn = $Emp->Emp_Prn;
        $this->Emp_Tarif = $Emp->Emp_Tarif;

        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'Emp_Nss' => 'required',
            'Emp_Nom' => 'required',
            'Emp_Prn' => 'required',
            'Emp_Tarif' => 'required'
        ]);

        Employe::find($this->Emp_Nss)->update([
            'Emp_Nom' => $this->Emp_Nom,
            'Emp_Prn' => $this->Emp_Prn,
            'Emp_Tarif' => $this->Emp_Tarif
        ]);
    }
    public function delete($id)
    {
        if ($id) {
            Employe::find($id)->delete();
            session()->flash('message', 'Employe Deleted Successfully.');
        }
    }
}
