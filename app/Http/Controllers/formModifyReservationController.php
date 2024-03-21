<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Utilisateur;
use App\Models\Ouvrage;

class formModifyReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        $reservation = Reservation::find($id);
        $users = Utilisateur::all();
        $ouvrages = Ouvrage::all();
        return view ("Reservations/formModifyReservation", compact("users"), compact("ouvrages"))->with("reservation", $reservation);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
