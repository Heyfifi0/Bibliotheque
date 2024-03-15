<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Editeur extends Model
{
    protected $table='editeurs';
    protected $primaryKey='id_editeur';
    public $timestamps = false;
    //public $incrementing = false;
    protected $fillable=[
        'id_editeur',
        'libelle'
    ];

    use HasFactory;

    public function ouvrages() : HasMany
    {
        return $this->hasMany(Ouvrage::class);
    }
}
