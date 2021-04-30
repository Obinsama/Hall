<?php

namespace Hall;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'client_id', 'service_id', 'user_id','date_facturation','montant','reste','date_limite','statut','fichier'
    ];
}
