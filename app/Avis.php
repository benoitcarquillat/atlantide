<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $table = 'avis';
    protected $fillable = [
        'avis',
        'note',
        'idActivity',
        'idUser',
    ];
}
