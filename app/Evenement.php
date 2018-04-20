<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [
        'id','type', 'nom', 'description', 'img', 'dateDebut', 'dateFin', 'adresse', 'ville', 'codeP'
    ];
}
