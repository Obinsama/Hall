<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = [
        'nom_equipement', 'type', 'valeur','description','caracteristiques','etat','duree_de_vie'
    ];
}
