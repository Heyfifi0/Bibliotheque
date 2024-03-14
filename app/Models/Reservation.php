<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table='reservations';
    protected $primaryKey='id_reservation';
    public $timestamps = false;
    //public $incrementing = false;
    protected $fillable=[
        'id_reservation',
        'id_ouvrage',
        'id_utilisateur',
        'date_reservation'
    ];

    use HasFactory;
}
