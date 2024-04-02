<?php

namespace App\Http\Controllers;

use App\Models\Editeur;
use App\Models\Ouvrage;
use App\Models\Genre;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Affiche les ouvrages.
     */
    public function index()
    {
        // On récupère les ouvrages en paginant à 5
        $ouvrages = Ouvrage::orderBy('id_ouvrage', 'asc')->paginate(5);

        return view('admin.ouvrages.index', compact('ouvrages'));
    }

    /**
     * Affiche le formulaire de création d'ouvrage.
     */
    public function create()
    {
        // On récupère les genres et les éditeurs
        $genres = Genre::all();
        $editeurs = Editeur::all();

        return view('admin.ouvrages.create', compact('genres', 'editeurs'));
    }

    /**
     * Insère l'ouvrage crée dans la base de données.
     */
    public function store(Request $request)
    {
        // Récupération des informations du formulaire
        // (voir views/admin/ouvrages/create)
        $created = $request->validate([
            'titre' => 'required',
            'type' => 'required',
            'code_isbn' => 'required',
            'genres' => 'required',
            'id_editeur' => 'required',
        ]);

        // Création de l'éditeur et ajout dans la table pivot 'genre_ouvrages'
        Ouvrage::create($created)->genres()->attach($created['genres']);

        return redirect()->route('ouvrages.index')->with('success', 'Ouvrage ajouté avec succès.');
    }

    /**
     * Affiche l'ouvrage spécifié.
     */
    public function show(Ouvrage $ouvrage)
    {
        //

    }

    /**
     * Affiche le formulaire de modification d'ouvrage.
     */
    public function edit(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Modifie l'ouvrage spécifié dans la base de données.
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Supprime l'ouvrage spécifié de la base de données.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
    }
}
