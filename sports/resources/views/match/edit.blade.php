@extends('layouts.app')

@section('content')
    
    <h2>Match edit</h2>
    
    {{ csrf_field() }}

    <div class="form-group">

        <label for="meteo">Meteo</label>
        <select class="form-control" id="meteo" name="meteo" value="{{match->meteo}}" required>
            <option value="sunny">Sunny</option>
            <option value="cloudy">Cloudy</option>
            <option value="rainy">Rainy</option>
            <option value="windy">Windy</option>
            <option value="stormy">Stormy</option>
        </select>
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
