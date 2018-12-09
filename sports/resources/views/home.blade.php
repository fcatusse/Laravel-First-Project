@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    <div class="card-header"> Dashboard
                    @if(Auth::check() && Auth::user()->is_admin == 1)
                        <div class="card-body">
                            <a href='match/create'>Create Match</a>
                            <a href='admin/team/create'>Create Team</a>
                            <a href='player/create'>Create Player</a>
                        </div>
                    @if(Auth::check())
                    <div class="card-body">
                            <a href='match/'>Match list</a>
                            <a href='team/'>Team list</a>
                            <a href='player/'>Player list</a>
                            <a href='wallet/'> Wallet </a>
                        </div>
                    @endif
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
