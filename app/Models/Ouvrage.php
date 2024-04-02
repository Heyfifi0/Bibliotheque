<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Genre;

class Ouvrage extends Model
{
    use HasFactory;
    protected $table='ouvrages';
    protected $primaryKey='id_ouvrage';
    public $timestamps = false;
    //public $incrementing = false;
    protected $fillable=[
        'id_ouvrage',
        'id_editeur',
        'code_isbn',
        'titre',
        'type'
    ];

    public function auteurs(){
        return $this->belongsToMany(Auteur::class,'auteur_ouvrages', 'id_auteur', 'id_ouvrage');
    }

    public function commentaires(){
        return $this->belongsToMany(Commentaire::class);
    }


    public function genres(){
        return $this->belongsToMany(Genre::class,'genre_ouvrages','id_ouvrage','id_genre');
    }

    public function editeurs(){
        return $this->belongsTo(Editeur::class, 'id_editeur');
    }

}