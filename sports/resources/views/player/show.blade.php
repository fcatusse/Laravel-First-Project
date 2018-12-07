@extends('layouts.app')

@section('content')

<div class="card-body">
<ul class="list-group">
  <li class="list-group-item">Player ID : {{$player->id}}</li>
  <li class="list-group-item">Name : {{$player->name}}</li>
  <li class="list-group-item">Team : {{$player->team->name}}</li>
  <li class="list-group-item">Goals : {{$player->goals}}</li>
  <li class="list-group-item">Faults : {{$player->faults}}</li>

</ul>

</div>

@endsection('content')