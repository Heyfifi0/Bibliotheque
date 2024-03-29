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
        $ouvrages = Ouvrage::all();

        return view('admin.ouvrages.index', compact('ouvrages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $editeurs = Editeur::all();

        return view('admin.ouvrages.create', compact('genres', 'editeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $created = $request->validate([
            'titre' => 'required',
            'type' => 'required',
            'code_isbn' => 'required',
            'genres' => 'required',
            'editeur' => 'required',
        ]);


        Ouvrage::create($created)->genres()->attach($created['genres']);

        return redirect()->route('ouvrages.index')->with('success', 'Ouvrage ajouté avec succès.');
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
