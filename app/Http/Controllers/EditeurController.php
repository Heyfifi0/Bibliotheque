<?php

namespace App\Http\Controllers;

use App\Models\Editeur;
use Illuminate\Http\Request;

class EditeurController extends Controller
{
    /**
     * Affiche la liste des éditeurs.
     */
    public function index()
    {
        $editeurs = Editeur::orderBy('id_editeur')->paginate(5);

        return view('editeurs.index', compact('editeurs'));
    }

    /**
     * Affiche le formulaire de création d'éditeur.
     */
    public function create()
    {
        return view('editeurs.create');
    }

    /**
     * Insère un éditeur dans la base de données.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required'
        ]);

        Editeur::create($validated)->save();

        return redirect()->route('editeurs.index')->with('success', 'Editeur créé avec succès!');
    }

    /**
     * Affiche l'éditeur spécifié.
     */
    public function show(Editeur $editeur)
    {
        return view('editeurs.show', compact('editeur'));
    }

    /**
     * Affiche le formulaire de modification d'un éditeur.
     */
    public function edit(Editeur $editeur)
    {
        return view('editeurs.edit', compact('editeur'));
    }

    /**
     * Met à jour un éditeur.
     */
    public function update(Request $request, Editeur $editeur)
    {
        $validated = $request->validate([
            'libelle' => 'required'
        ]);

        // dd($validated);

        $editeur->update($validated);

        return redirect()->route('editeurs.index')->with('success', 'Editeur créé avec succès!');
    }

    /**
     * Supprime l'éditeur de la base de données.
     */
    public function destroy(Editeur $editeur)
    {
        $editeur->delete();

        return redirect()->route('editeurs.index')->with('success', 'Editeur supprimé.');
    }
}
