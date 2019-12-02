<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilityPokemon extends Model
{
    public $timestamps = false;
    protected $fillable = ["idability","idpokemon"];
}
