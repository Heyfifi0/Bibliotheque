<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Auteur;
use App\Models\Editeur;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Ouvrage::all();
        return view('auteur.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all(); // Récupère tous les auteurs
        $genres = Genre::all(); // Récupère tous les genres
        $editeurs = Editeur::all(); // Récupère tous les genres

        return view('ouvrage.create', compact('auteurs', 'genres', 'editeurs'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'titre' => 'required|max:50',
        ]);

        $ouvrage = new Ouvrage([
            'titre' => $request->get('titre'),
            'type' => $request->get('type'),
            'id_editeur' => $request->get('editeur'),
        ]);
        $ouvrage->save();

         // Ajout des auteurs à la table pivot
         $ouvrage->auteurs()->attach($request->get('auteur'));

         // Ajout des genres à la table pivot
         $ouvrage->genres()->attach($request->get('genre'));

        return redirect('/auteurs') ->with('Ouvrage ajouté avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrage $ouvrage)
    {
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
    }
}
