<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable = [
        'libelle','montant'
    ];
}
