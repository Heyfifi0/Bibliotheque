<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\EditeurController;
use App\Http\Controllers\OuvrageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Accueil
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

// Ouvrages
Route::resource('/ouvrages', OuvrageController::class);

// Auteurs
Route::resource('/auteurs', AuteurController::class);

// Editeurs
Route::resource('/editeurs', EditeurController::class);



//route pour tester la connexion à la base de données
Route::get('/testbd', function () {
    return view('testBD');
});
//test retour données
Route::get('/uti', function () {
    return App\Models\Utilisateur::all();
});

//test table pivot
Route::get('/genre', function () {
    return App\Models\Ouvrage::find(1)->genres()->get();
});
Route::get('/livres/show', function () {
    return view('/ouvrages/show');
});

Route::get('/livres/edit', function () {
    return view('/ouvrages/edit');
});

Route::get('/livres/create', function () {
    return view('/ouvrages/create');


});