<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Autoriser les champs
    protected $fillable = ['name','country','matchs_won','matchs_lose','matchs_null'];
}
