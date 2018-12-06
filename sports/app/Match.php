<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
protected $fillable = ['meteo', 'team1', 'team2', 'team1_goals', 'team2_goals', 'team1_faults', 'team2_faults', 'winner'];
} 
