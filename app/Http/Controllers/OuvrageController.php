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
        $livres = Ouvrage::paginate(6); // Affiche 6 ouvrages par page
        return view('ouvrages.index', compact('livres'));// compact va  récupérer la variable livres pour lui ajouter une fonction dans la vue index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all(); // Récupère tous les auteurs
        $genres = Genre::all(); // Récupère tous les genres
        $editeurs = Editeur::all(); // Récupère tous les genres

        return view('ouvrages.create', compact('auteurs', 'genres', 'editeurs'));}// compact va  récupérer les variables, pour la vue create
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            /*'type' => 'required|max:255',
            'id_editeur' => 'required|max:255',
            'id_auteur' => 'required|array',
            'id_genre' => 'required|array',*/


        ],[
            'titre.required' =>'Le champ est obligatoire.',
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
        Session::flash('success', 'ouvrage ajouté');
        return redirect('/ouvrages')->with('success','Ouvrage créé avec succès');
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
        $auteurs = Auteur::all(); // Récupère tous les auteurs
        $genres = Genre::all(); // Récupère tous les genres
        $editeurs = Editeur::all(); // Récupère tous les genres
        return view('ouvrages.edit', compact('ouvrage','auteurs', 'genres', 'editeurs'));
      }

    /**
     * Update the specified resource {{ $livre->titre}}  in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           // 'titre' => 'required|max:255',
        ]);

        $ouvrage = Ouvrage::findOrFail($id);

        $ouvrage->titre = $request->get('titre');

        $ouvrage->type = $request->get('type');
        $ouvrage->id_editeur = $request->get('editeur');

        // Ajout des auteurs à la table pivot
        $ouvrage->auteurs()->sync($request->get('auteur'));

        // Ajout des genres à la table pivot
        $ouvrage->genres()->sync($request->get('genre'));

        $ouvrage->save();

        Session::flash('success', 'ouvrage mis à jour');
        // Redirect with success message
        return redirect()->route('ouvrages.index')->with('success', 'Ouvrage mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $livre = Ouvrage::findOrFail($id);
        $livre->auteurs()->detach();
        $livre->genres()->detach();
        $livre->delete();
    
        return redirect('/ouvrages')->with('success', 'Livre supprimé avec succès');    }
}
