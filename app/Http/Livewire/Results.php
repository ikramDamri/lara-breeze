<?php

namespace App\Http\Livewire;
use App\Models\{Agriculteur, Intervention, Parcelle};
use Livewire\Component;

class Results extends Component
{
    public $agriculteur , $parcelle, $parcelles , $parcelle3 , $intervention, $intervention2, $intervention3, $intervention4, $parcelle4, $maximum, $minimum;
    public function render()
    {
        //$this->agriculteurs = Agriculteur::all();
        return view('livewire.result');
    }


    public function question1()
    {
        $this->agriculteur = Agriculteur::orderBy('Agr_Nom')->get();
        return view('livewire.result');
    }

    public function question2()
    {
        $this->parcelle = Parcelle::where('Par_Superficie', '>', 300)->get();
        return view('livewire.result');
    }

    public function question3()
    {
        $this->parcelles = Parcelle::where('Par_Lieu', 'Arith')
        ->whereBetween('Par_Superficie', [201, 499])
        ->get();
        return view('livewire.result');
    }

    public function question4()
    {
        $this->parcelle3 = Parcelle::select('Par_Nom', 'Agr_Nom')
        ->join('agriculteurs', 'Par_Prop', '=', 'agriculteurs.id')
        ->get();
        return view('livewire.result');
    }

    public function question5()
    {
        $this->intervention = Intervention::whereBetween('Int_Debut', [date('07-11-2011'), date('09-02-2012')])
        ->get();
        return view('livewire.result');
    }

    public function question6()
    {
        $this->intervention2 = Intervention::select('interventions.id', 'Par_Nom')
        ->join('parcelles', 'Int_Par_Id', '=', 'parcelles.id')
        ->get();
        return view('livewire.result');
    }

    public function question7()
    {
        $this->intervention3 = Intervention::select('interventions.id', 'Par_Nom', 'Emp_Nom')
        ->join('parcelles', 'Int_Par_Id', '=', 'parcelles.id')
        ->join('employes', 'Int_Emp_Nss', '=', 'employes.Emp_Nss')
        ->get();
        return view('livewire.result');
    }

    public function question8()
    {
        $this->intervention4 = Intervention::select('interventions.id', 'Emp_Nom')
        ->join('employes', 'Int_Emp_Nss', '=', 'employes.Emp_Nss')
        ->where('Emp_Nom', 'Pernet')
        ->get();
        return view('livewire.result');
    }

    public function question9()
    {
        $this->parcelle4 = Parcelle::sum('Par_Superficie');
        return view('livewire.result');
    }

    public function question10()
    {
        $this->maximum = Parcelle::orderBy('Par_Superficie', 'desc')->value('Par_Nom');
        return view('livewire.result');

    }


    public function question11()
    {
        $this->maximum = Parcelle::orderBy('Par_Superficie', 'asc')->value('Par_Nom');
        return view('livewire.result');
    }
}
