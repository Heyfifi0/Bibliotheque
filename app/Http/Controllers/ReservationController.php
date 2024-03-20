<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view ("reservation", compact("reservations"));       
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //$nouvelleReservation = new Reservation;
        //$nouvelleReservation->id_utilisateur = $request->input('user');
        //$nouvelleReservation->id_ouvrage = $request->input('ouvrage');
        //$nouvelleReservation->date_reservation=date("Y/m/d");
        //return redirect('/reservations'); 
        $nouvelleReservation = Reservation::create([
            'id_utilisateur' => $request->input('user'),
            'id_ouvrage' => $request->input('ouvrage'),
            'date_reservation' => date("Y/m/d"),
        ]);
        return redirect('/reservations'); 
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
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Reservation::where('id_reservation', $id)->delete();
        return redirect('/reservations');          
    }
}
