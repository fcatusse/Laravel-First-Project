@extends('layouts.app')

@section('content')
    
    <h2>Teams listing</h2>

    <table class="table">
        <tr>
            <th scope="col">name</th>
            <th scope="col">country</th>
            <th scope="col">flag</th>
        </tr>
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->country }}</td>
            <td><img src="/img/flags/{{ $team->country }}.png"></td>
        </tr>
        @endforeach
    </table>

@endsection
