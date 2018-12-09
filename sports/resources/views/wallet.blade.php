@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
  
                    <div class="card-header"> Wallet
                        <div class="card-body">
                        <ul>
                        <p>You currently have {{Auth::user()->wallet}} euros in your wallet </li>
                        </ul>
                        </div>
                    @if(Auth::check())
                    <div class="card-body">
                            <a href='match/'>Match list</a>
                            <a href='team/'>Team list</a>
                            <a href='player/'>Player list</a>
                            <a href='wallet/'> Bet </a>
                        </div>
                    @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
