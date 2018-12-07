@extends('layouts.app')

@section('content')

<div class="card-body">
<ul class="list-group">
  <li class="list-group-item">Match ID : {{$match->id}}</li>
  <li class="list-group-item">Weather : {{$match->meteo}}</li>
  <li class="list-group-item">Team {{$team1}} goals : {{$match->team1_goals}}</li>
  <li class="list-group-item">Team {{$team2}} goals : {{$match->team2_goals}}</li>
  <li class="list-group-item">Team {{$team1}} faults : {{$match->team1_faults}}</li>
  <li class="list-group-item">Team {{$team2}} faults : {{$match->team2_faults}}</li>
  <li class="list-group-item">Winner : Team {{$match->winner}}</li>
</ul>

</div>

@endsection('content')