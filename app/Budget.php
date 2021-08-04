<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'periode','montant','execution','reste'
    ];
}
