<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Pagination\Paginator;
use App\Models\Genre;
use App\Models\Auteur;
use App\Models\Editeur;
use Session;

use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ouvrages = Ouvrage::all();
        return view('ouvrages.index', compact('ouvrages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all(); 
        $genres = Genre::all(); 
        $editeurs = Editeur::all(); 

        return view('ouvrages.create', compact('auteurs', 'genres', 'editeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'type_ouvrage' => 'required|max:255',
            'id_auteurs' => 'required|array',
            'id_genres' => 'required|array',
            'id_editeur' => 'required|max:255',
        ]);

        $ouvrage = Ouvrage::create($request->only('titre', 'type_ouvrage', 'id_editeur'));

        $ouvrage->auteurs()->attach($request->get('id_auteurs'));
        $ouvrage->genres()->attach($request->get('id_genres'));

        return redirect()->route('ouvrages.index')
        ->with('success', 'Ouvrage créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrage $ouvrage)
    {
	    return view(‘abonnements.show’, compact($ouvrage));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrage $ouvrage)
    {
        $auteurs = Auteur::all(); 
        $genres = Genre::all(); 
        $editeurs = Editeur::all();

        return view('ouvrages.edit', compact('ouvrage', 'auteurs', 'genres', 'editeurs'));
      }

    /**
     * Update the specified resource  in storage.
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'type_ouvrage' => 'required|max:255',
            'id_auteurs' => 'required|array',
            'id_genres' => 'required|array',
            'id_editeur' => 'required|max:255',
        ]);

        $ouvrage->update($request->only('titre', 'type_ouvrage', 'id_editeur'));

        $ouvrage->auteurs()->sync($request->get('auteur'));
        $ouvrage->genres()->sync($request->get('genre'));

        return redirect()->route('ouvrages.index')
        ->with('success', 'Ouvrage modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        $ouvrage->auteurs()->detach();
        $ouvrage->genres()->detach();
        $ouvrage->delete();
    
        return redirect()->route('ouvrages.index')
        ->with('success', 'Ouvrage détruit avec succès.');
    }
}


