<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class ConnexionController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     */
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'email' => 'required | email | unique:utilisateurs,email',
            'adresse' => 'required',
            'code_postal' => 'required | min:0',
            'ville' => 'required',
            'password' => 'required | min:8 | confirmed'
        ]);

        // L'utilisateur est crée à partir de ces informations

        Utilisateur::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'date_naissance' => $validated['date_naissance'],
            'email' => $validated['email'],
            'adresse' => $validated['adresse'],
            'code_postal' => $validated['code_postal'],
            'ville' => $validated['ville'],
            'password' => Hash::make($validated['password']) // Hashing du mot de passe
        ]);

        return redirect()->route('dashboard')->with('success', 'Compte crée avec succès.');


    }

    /**
     * Affiche le formulaire de connexion.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Connecte l'utilisateur à l'application.
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:8'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->route('dashboard')->with('success', 'Vous êtes connecté.');
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects'
        ])->onlyInput('email');



    }

    /**
     * Déconnecte l'utilisateur à l'application.
     */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('login')->with('success', 'Vous vous êtes déconnecté.');


    }
}
