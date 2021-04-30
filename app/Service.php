<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'type', 'cout', 'delai','description','statut'
    ];
}
