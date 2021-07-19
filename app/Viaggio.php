<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaggio extends Model
{
    protected $fillable = ['destinazione', 'img', 'hotel', 'valutazione', 'prezzo', 'descrizione'];
}
