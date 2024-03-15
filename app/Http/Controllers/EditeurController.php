<?php

namespace App\Http\Controllers;

use App\Models\Editeur;
use Illuminate\Http\Request;

class EditeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editeurs = Editeur::all();

        return view('editeurs.index', compact('editeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('editeurs.create');
    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     */
    public function show(Editeur $editeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editeur $editeur)
    {
        return view('editeurs.edit', compact('editeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editeur $editeur)
    {
        $validated = $request->validate([
            'libelle' => 'required'
        ]);

        $editeur->update($validated);

        return redirect()->route('editeurs.index')->with('success', 'Editeur créé avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editeur $editeur)
    {
        $editeur->delete();

        return redirect()->route('editeurs.index')->with('success', 'Editeur supprimé.');
    }
}
