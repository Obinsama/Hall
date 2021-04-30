<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = [
        'service_id','type', 'cout', 'delai','description','statut'
    ];
}
