<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Autoriser les champs
    protected $fillable = ['name','country','matchs_won','matchs_lose','matchs_null', 'odds'];

    public function player()
    {
    	return $this->hasMany(Player::class);
    }
}
