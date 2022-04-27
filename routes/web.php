<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Livewire\Agriculteurs;
use App\Http\Livewire\Employes;
use App\Http\Livewire\Interventions;
use App\Http\Livewire\Parcelles;
use App\Http\Livewire\Results;
use App\Http\Livewire\Tarifs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//auth route for all users
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
});



// for agriculteurs
Route::group(['middleware' => ['auth']], function() {
    Route::get('/agriculteur', Agriculteurs::class)->name('livewire.agriculteurs');
});

// for parcelles
Route::group(['middleware' => ['auth']], function() {
    Route::get('/parcelle', Parcelles::class)->name('livewire.parcelles');
});

// for employes
Route::group(['middleware' => ['auth']], function() {
    Route::get('/employe', Employes::class)->name('livewire.employes');
});

// for tarifs
Route::group(['middleware' => ['auth']], function() {
    Route::get('/tarif', Tarifs::class)->name('livewire.tarifs');
});

// for interventions
Route::group(['middleware' => ['auth']], function() {
    Route::get('/intervention', Interventions::class)->name('livewire.interventions');
});

// for results
Route::group(['middleware' => ['auth']], function() {
    Route::get('/result', Results::class)->name('livewire.results');
});

require __DIR__.'/auth.php';
