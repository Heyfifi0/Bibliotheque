<?php

namespace App\Http\Controllers;

use App\Models\Type_abonnement;
use Illuminate\Http\Request;

class Type_abonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_abonnements = Type_Abonnement::all();
        return view('abonnements.index', compact('abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonnements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_utilisateur' => 'required|max:255',
            'id_type_abonnement' => 'required|max:255',
            'date_debut' => 'required|max:255',
            'date_fin' => 'required|max:255'
        ]);
        Abonnement::create($request->all());
        return redirect()->route('abonnements.index')
        ->with('success', 'Abonnement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonnement $id)
    {
        $abonnement = Abonnement::find($id);
        return view('abonnements.show', compact('abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $abonnement = Abonnement::find($id);
        return view('abonnements.edit', compact('abonnement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_utilisateur' => 'required|max:255',
            'id_type_abonnement' => 'required|max:255',
            'date_debut' => 'required|max:255',
            'date_fin' => 'required|max:255'
        ]);
        $abonnement = Abonnement::find($id);
        $abonnement->update($request->all());
        return redirect()->route('abonnements.index')
        ->with('success', 'Abonnement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $abonnement = Abonnement::find($id);
        $abonnement->delete();
        return redirect()->route('abonnements.index')
          ->with('success', 'Abonnement deleted successfully');
    }
}
