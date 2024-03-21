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

Route::get('/reservations', [\App\Http\Controllers\ReservationController::class, 'index']);
Route::get('/reservations-create-form', [\App\Http\Controllers\formCreateReservationController::class, 'index']);
Route::post('/reservations-create', [\App\Http\Controllers\ReservationController::class, 'create']);
Route::get('/reservations-modify-form/{id}', [\App\Http\Controllers\formModifyReservationController::class, 'index']);
Route::post('/reservation-modify', [\App\Http\Controllers\ReservationController::class, 'update']);
Route::get('/reservations-delete/{id}', [\App\Http\Controllers\ReservationController::class, 'destroy'])->name('reservation.delete');

//test table pivot
Route::get('/genre', function () {
    return App\Models\Ouvrage::find(1)->genres()->get();
});
