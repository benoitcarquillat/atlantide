<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{
    protected $table = 'lieux';
    protected $fillable = [
        'type',
        'nom',
        'description',
        'img',
        'adresse',
        'ville',
        'codeP',
    ];


}
