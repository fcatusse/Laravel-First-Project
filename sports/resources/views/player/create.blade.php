@extends('layouts.app')

@section('content')

<form method="POST" action="/player">

    {{ csrf_field() }}

    <div class="form-group">

        <label for="name">Player Name</label>

        <input type="text" class="form-control" id="name" name="name" required>

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

        <label for="goals">Goals scored</label>

        <input type="text" class="form-control" id="goals" name="goals" required>

    </div>

    <div class="form-group">

        <label for="faults">Fouls committed</label>

        <input type="text" class="form-control" id="faults" name="faults" required>

    </div>

    <button type="submit" class="btn btn-primary">Create Player</button>

    </form>

@endsection