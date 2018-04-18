<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'id','commentaire', 'idAvis', 'idUser'
    ];
}
