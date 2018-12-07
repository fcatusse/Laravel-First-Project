@extends('layouts.app')

@section('content')


    <table class="table">
        <tr>
            <th scope="col">Match ID</th>
            <th scope="col">Meteo</th>
            <th scope="col">Team 1 </th>
            <th scope="col">Team 2</th>
            <th scope="col">Team 1 goals</th>
            <th scope="col">Team 2 goals</th>
            <th scope="col">Winner</th>
            

 @foreach($matches as $match)
        <tr>
            <td>{{ $match->id }}</td>
            <td>{{ $match->meteo }}</td>
            <td>{{ $match->team1 }}</td>
            <td>{{ $match->team2 }}</td>
            <td>{{ $match->team1_goals }}</td>
            <td>{{ $match->team2_goals }}</td>
            <td>{{ $match->winner }}</td>
        </tr>
       

@endforeach
    </table>

@endsection