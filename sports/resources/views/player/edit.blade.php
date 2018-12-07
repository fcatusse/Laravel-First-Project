@extends('layouts.app')

@section('content')
    
    <h2>Player edit</h2>
    
    <form method="POST" action="/update/{{$player->id}}">
        @csrf
        <div class="form-group">
            <label>Name</label><br>
            <input class="form-control" type="text" name="name" placeholder="Enter player name" value="{{ $player->name }}">
        </div>
        <div class="form-group">
        <label for="team_id">Team</label>
        <select class="form-control" id="team_id" name="team_id" required>
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
        </select>
    </div>   
        <div class="form-group">
            <label>Goals scored</label><br>
            <input class="form-control" type="number" name="goals" value="{{ $player->goals }}">
        </div>
        <div class="form-group">
            <label>Fouls committed</label><br>
            <input class="form-control" type="number" name="faults" value="{{ $player->faults }}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
