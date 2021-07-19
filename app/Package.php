<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'destinazione',
        'prezzo',
        'giorni_permanenza',
        'data_partenza'
    ];
}