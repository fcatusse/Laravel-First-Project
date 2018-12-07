@extends('layouts.app')

@section('content')


    <table class="table">
        <tr>
            <th scope="col">Player ID</th>
            <th scope="col">Name</th>
            <th scope="col">Team </th>
            <th scope="col">Goals</th>
            <th scope="col">Faults</th>

@foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->team_name }}</td>
            <td>{{ $player->goals }}</td>
            <td>{{ $player->faults }}</td>
            <td><a href="/player/edit/{{ $player->id }}">Edit</a> / <a href="player/destroy/{{ $player->id }}">Delete</a> / <a href="player/show/{{ $player->id }}">Show</a></td>
        </tr> 
@endforeach
    </table>

@endsection