<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    protected $fillable = [
        'service_id','type', 'cout', 'libelle','description','statut'
    ];
}
