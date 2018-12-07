@extends('layouts.app')

@section('content')
    
    <h2>Admin Teams listing</h2>

    <table class="table">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Flag</th>
            <th scope="col">Actions</th>
        </tr>
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->country }}</td>
            <td><img src="/img/flags/{{ $team->country }}.png"></td>
            <td><a href="/admin/teams/edit/{{ $team->id }}">Edit</a> / <a href="/admin/teams/delete/{{ $team->id }}">Supprimer</a></td>
        </tr>
        @endforeach
    </table>
    <a href="/admin/teams/add">Ajouter</a>

@endsection
