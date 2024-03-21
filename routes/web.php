<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\EditeurController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OuvrageController;
use App\Http\Controllers\ReservationController;

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
Route::get('/', function () {
    return view('welcome');
});

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

Route::resource('/emprunts', EmpruntController::class);

// Auteurs
Route::resource('/auteurs', AuteurController::class);

// Abonnements
Route::resource('/abonnements', AbonnementController::class);

// Editeurs
Route::resource('/editeurs', EditeurController::class);

// Genres
Route::resource('/genres', GenreController::class);

// Ouvrages
Route::resource('/ouvrages', OuvrageController::class);

// Réservations
Route::resource('/reservations', ReservationController::class);

Route::get('/', function () {
    return view('accueil');
})->name('accueil');