<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable = ['name', 'team_id', 'goals', 'faults'];

    public function team()
    {
    	return $this->belongsTo(Team::class);
    }
}
