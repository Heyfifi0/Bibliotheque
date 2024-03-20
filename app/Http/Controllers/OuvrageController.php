<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Pagination\Paginator;
use App\Models\Genre;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Ouvrage::paginate(15); // Affiche 10 ouvrages par page
        return view('ouvrages.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ouvrages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'type' => 'required|max:255',
            'id_editeur' => 'required|max:255',

        ]);
        $ouvrage = new Ouvrage([
            'titre' => $request->get('titre'),
            'type' => $request->get('type'),
            'id_editeur' => $request->get('id_editeur'),

        ]);
        $ouvrage->save();
    
        return redirect('/ouvrages')->with('success','Ouvrage créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrage $ouvrage)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrage $ouvrage)
    {
        return view('ouvrages.edit', compact('ouvrage'));
      }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|max:255',
        ]);

        $ouvrage = Ouvrage::findOrFail($id);

        $ouvrage->titre = $request->get('titre');

        $ouvrage->save();

        // Redirect with success message
        return redirect()->route('ouvrages.index')->with('success', 'Ouvrage mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $livre = Ouvrage::findOrFail($id);
        $livre->delete();
    
        return redirect('/ouvrages')->with('success', 'Livre supprimé avec succès');    }
}
