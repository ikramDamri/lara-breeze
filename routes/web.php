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
/* Route::view('/','livewire.home'); */
//auth route for both
/* Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    //Route::view('/dashboard', 'livewire.dashboard')->name('dashboard');
}); */

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    //Route::get('/dashboard', Dashboard@index)->name('dashboard');
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
});

// for users
/* Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Livewire\Dashboard')->name('dashboard.myprofile');
}); */

// for blogwriters
/* Route::group(['middleware' => ['auth', 'role:blogwritter']], function() {
    Route::view('/postcreate', 'livewire.postcreate')->name('livewire.postcreate');
    //('/dashboard/postcreate', Dashboard::class);
});
 */



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

/* Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::view('/agriculteur', 'livewire.home')->name('livewire.agriculteurs');
    //('/dashboard/postcreate', Dashboard::class);
}); */


/* Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::view('/parcelles','livewire.parcelles.home');
    //('/dashboard/postcreate', Dashboard::class);
}); */

/* Route::get('/parcelles', Parcelles::class);

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/parcelles/{agriculteur}', Parcelles::class)->name('parcelles'); */
    //('/dashboard/postcreate', Dashboard::class);
//});

require __DIR__.'/auth.php';
