<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\Team;

class MatchController extends Controller
{

    public function index()
    {
        $matches = Match::all();
        return view('match.index', compact('matches'));        
    }

    public function show(Match $match)
    {   
       //$test =compact('match');
       //dd($match);
       //$test = Match::find(4);
       //$team1 = $test->team1;
       //$team2 = $test->team2;
       //dd($team1,$team2);
       //dd($test->team2);
       //dd($match->team1["team1"]);
       //$test = Team::where('id', '=', '$team1' )->get();
       //$test2 = Team::where('id', '=', '$team2' )->get();
       //dd($test, $test2);
        return view('match.show', compact('match'), ['teams' => Team::all()]);
    }

    public function create()
    {
        return view('match.create', ['teams' => Team::all()]);
    }

    public function edit($id)
    {
        return view('match.index');
    }

    public function update(Request $request,$id)
    {

        return view('match.index');
    }

    public function destroy($id)
    {
        return view('match.index');
    }

    public function store()
    {
        Match::create(request()->all());
        
        return redirect('/match');
    }
}
