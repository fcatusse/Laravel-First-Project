@extends('layouts.app')

@section('content')
<div class="card-header center"> 
<!--- Ce code dégueulasse et incompréhensible a été écrit par Damian (mais ça marche) --->
@php $i = 0 @endphp
@foreach($teams as $team)
@if($i == 0)
@foreach($team->where('id', '=', $match->team1)->get() as $field)
@endforeach
  @php $i+= 1; 
  $team1 =$field->name; @endphp {{$team1}}  vs
  
  @endif

@endforeach

@foreach($team->where('id', '=', $match->team2)->get() as $field)
@php
  $team2 =$field->name; @endphp {{$team2}}


@endforeach

<!---Team {{ $teams }} vs Team {{$match->team2}} --->
</div>

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
@endsection