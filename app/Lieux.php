<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    protected $table = 'activity';
    protected $fillable = [
        'type',
        'nom',
        'pays',
        'adresse',
    ];


}
