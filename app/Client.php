<?php


namespace Hall;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom','prenom','telephone','adresse','cni','profession'
    ];
}