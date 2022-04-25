<?php

namespace App\Http\Livewire;
use App\Models\Tarif;
use Livewire\Component;

class Tarifs extends Component
{
    public $isOpen = 0;
    public $tarif, $Tar_Description, $Tar_Euro;
    public function render()
    {
        $this->tarif = Tarif::all();
        return view('livewire.tarifs');
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
        $this->Tar_Description = '';
        $this->Tar_Euro = '';
    }

    private function resetInputFields()
    {
        $this->Tar_Description = '';
        $this->Tar_Euro = '';
    }
    public function store()
    {
        $this->validate([
            'Tar_Description' => 'required',
            'Tar_Euro' => 'required',
        ]);

        Tarif::updateOrCreate(['Tar_Description' => $this->Tar_Description, 'Tar_Euro' => $this->Tar_Euro]);
        session()->flash(
            'message',
            $this->Tar_Description ? 'tarif Updated Successfully.' : 'tarif Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Tarif  = Tarif::findOrFail((string)$id);
        $this->Tar_Description = $id;
        $this->Tar_Euro = $Tarif->Tar_Euro;

        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'Tar_Description' => 'required',
            'Tar_Euro' => 'required'
        ]);

        Tarif::find($this->Tar_Description)->update([
            'Tar_Euro' => $this->Tar_Euro,
            'Tar_Description' => $this->Tar_Description
        ]);
    }
    public function delete($id)
    {

        if ($id) {
            // $this->type = gettype($id);
            Tarif::find($id)->delete();
            session()->flash('message', 'tarif Deleted Successfully.');
        }
    }
}
