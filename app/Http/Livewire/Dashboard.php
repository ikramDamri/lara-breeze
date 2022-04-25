<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        if(Auth::user()->hasRole('viewer')){
            return view('livewire.viewerdash');
       }elseif(Auth::user()->hasRole('editor')){
            return view('livewire.editordash');
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
   }

    }


}
