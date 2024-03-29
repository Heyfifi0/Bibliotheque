<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AuteurController;
use App\Http\Controllers\EditeurController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OuvrageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ConnexionController;
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

// Authentification
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [ConnexionController::class, 'register'])->name('register');
    Route::post('/register', [ConnexionController::class, 'store'])->name('store');
    Route::get('/login', [ConnexionController::class, 'login'])->name('login');
    Route::post('/login', [ConnexionController::class, 'authenticate'])->name('authenticate');
});
Route::post('/logout', [ConnexionController::class, 'logout'])->name('logout');

// Route de base
Route::get('/', function () {
    return view('home');
})->name('home');


// Routes administrateur (utilisant la Gate 'admin')
Route::middleware(['auth', 'can:admin'])->prefix('/admin')->group(function () {

    Route::get('/', function() {
        return redirect()->route('dashboard');
    });

    // Dashboard
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');

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

    // Reservations
    Route::resource('/reservations', ReservationController::class);

});

// Test
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
