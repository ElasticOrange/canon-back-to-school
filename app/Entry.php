<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
          'email'
        , 'nume'
        , 'telefon'
        , 'contact'
        , 'optradio'
    ];
}
