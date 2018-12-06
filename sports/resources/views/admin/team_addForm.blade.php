@extends('layouts.app')

@section('content')
    
    <h2>Admin Teams add</h2>

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
            <input class="form-control" type="text" name="name" placeholder="Enter team name">
        </div>
        <div class="form-group">
            <label>Country</label><br>
            <select class="form-control" name="country">
                @foreach ($data_countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Matches won</label><br>
            <input class="form-control" type="number" name="matchs_won" placeholder="Enter mumber matches lon">
        </div>
        <div class="form-group">
            <label>Matches lose</label><br>
            <input class="form-control" type="number" name="matchs_lose" placeholder="Enter mumber matches lose">
        </div>
        <div class="form-group">
            <label>Matches null</label><br>
            <input class="form-control" type="number" name="matchs_null" placeholder="Enter mumber matches null">
        </div>
         <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
