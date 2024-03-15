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

Route::get('/auteur', function () {
    return App\Models\Auteur::all();
});

Route::get('/auteur/c', function () {
    return view ('/auteur/create');
});

Route::get('/auteur/e', function () {
    return view ('/auteur/edit');
});

Route::get('/auteur/s', function () {
    return view ('/auteur/show');
});
