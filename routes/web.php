<?php

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

Route::get('/userCreate', [\App\Http\Controllers\UtilisateurController::class,'userC']) ;
Route::post('/userCreate/enreg',[\App\Http\Controllers\UtilisateurController::class,'enregistre']);
Route::get('/userListe', [\App\Http\Controllers\UtilisateurController::class,'userL'])->name('userListe');
Route::get('/userUpdate/{id}',[\App\Http\Controllers\UtilisateurController::class,'userUpdate']);
Route::post('/userUpdate/update/{id}',[\App\Http\Controllers\UtilisateurController::class,'userUpdateTraitement']);
Route::get('/userDelete/{id}',[\App\Http\Controllers\UtilisateurController::class,'delete']);