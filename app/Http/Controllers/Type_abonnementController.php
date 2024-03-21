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
        $type_abonnements = Type_abonnement::all();
        return view('type_abonnements.index', compact('type_abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_abonnements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'prix' => 'required|max:255'
        ]);
        Type_abonnement::create($request->all());
        return redirect()->route('type_abonnements.index')
        ->with('success', 'Type Abonnement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type_abonnement $id)
    {
        $type_abonnement = Type_abonnement::find($id);
        return view('type_abonnements.show', compact('type_abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type_abonnement = Type_abonnement::find($id);
        return view('type_abonnements.edit', compact('type_abonnement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'prix' => 'required|max:255'
        ]);
        $type_abonnement = Type_abonnement::find($id);
        $type_abonnement->update($request->all());
        return redirect()->route('type_abonnements.index')
        ->with('success', 'Type Abonnement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type_abonnement = Type_abonnement::find($id);
        $type_abonnement->delete();
        return redirect()->route('type_abonnements.index')
          ->with('success', 'Type Abonnement deleted successfully');
    }
}
