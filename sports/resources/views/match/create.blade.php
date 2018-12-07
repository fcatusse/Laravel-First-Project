@extends('layouts.app')

@section('content')

<form method="POST" action="/match">

    {{ csrf_field() }}

    <div class="form-group">

        <label for="meteo">Meteo</label>
        <select class="form-control" id="meteo" name="meteo" required>
            <option value="sunny">Sunny</option>
            <option value="cloudy">Cloudy</option>
            <option value="rainy">Rainy</option>
            <option value="windy">Windy</option>
            <option value="stormy">Stormy</option>
        </select>
    </div>

    <div class="form-group">
        <label for="team1">Team 1</label>
        <select class="form-control" id="team1" name="team1" required>
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="team2">Team 1</label>
        <select class="form-control" id="team2" name="team2" required>
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">

        <label for="team1_goals">Team 1 goals</label>

        <input type="text" class="form-control" id="team1_goals" name="team1_goals" required>

    </div>

    <div class="form-group">

        <label for="team2_goals">Team 2 goals</label>

        <input type="text" class="form-control" id="team2_goals" name="team2_goals" required>

    </div>

    <div class="form-group">

        <label for="team1_faults">Team 1 faults</label>

        <input type="text" class="form-control" id="team1_faults" name="team1_faults" required>

    </div>

    <div class="form-group">

        <label for="team2_faults">Team 2 faults</label>

        <input type="text" class="form-control" id="team2_faults" name="team2_faults" required>

    </div>

    <div class="form-group">
        <label for="winner">Winner</label>
        <select class="form-control" id="winner" name="winner" required>
        @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
        @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Match</button>

    </form>




@endsection