<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
   public function index()
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
