@extends('layouts.app')

@section('content')
    
    <h2>Admin Teams edit</h2>

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Name</label><br>
            <input class="form-control" type="text" name="name" placeholder="Enter team name" value="{{ $team->name }}">
        </div>
        <div class="form-group">
            <label>Country</label><br>
            <select class="form-control" name="country">
                @foreach ($data_countries as $key => $value)
                    @if($team->country == $key)
                        <option value="{{ $key }}" selected>{{ $value }}</option>
                    @else
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Matches won</label><br>
            <input class="form-control" type="number" name="matchs_won" placeholder="Enter mumber matches won" value="{{ $team->matchs_won }}">
        </div>
        <div class="form-group">
            <label>Matches lose</label><br>
            <input class="form-control" type="number" name="matchs_lose" placeholder="Enter mumber matches lose" value="{{ $team->matchs_lose }}">
        </div>
        <div class="form-group">
            <label>Matches null</label><br>
            <input class="form-control" type="number" name="matchs_null" placeholder="Enter mumber matches null" value="{{ $team->matchs_null }}">
        </div>
        <input name="id" type="hidden" value="{{ $team->id }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
