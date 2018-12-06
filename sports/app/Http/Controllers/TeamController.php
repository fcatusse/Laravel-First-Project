<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Data;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('team', compact('teams'));
    }

    public function admin()
    {
        $teams = Team::all();
        return view('admin/team', compact('teams'));
    }

    public function delete($id)
    {
        $team = Team::find($id);
        $team->delete();
        $teams = Team::all();
        return view('admin/team', compact('teams'));
    }

    public function addForm()
    {
        $data_countries = Data::getCountries();
        return view('admin/team_addForm', compact('data_countries'));
    }

    public function add(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'country' => 'required',
            'matchs_won' => 'required',
            'matchs_lose' => 'required',
            'matchs_null' => 'required',
        ]);

        // Voir le model fillable
        Team::create(request()->all());
        $teams = new Team();
        $teams = Team::all();
        return view('admin/team', compact('teams'));
    }

    public function editForm($id)
    {
        $team = Team::find($id);
        $data_countries = Data::getCountries();
        return view('admin/team_editForm', compact('team','data_countries'));
    }

    public function edit($id, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'country' => 'required',
            'matchs_won' => 'required',
            'matchs_lose' => 'required',
            'matchs_null' => 'required',
        ]);
        $team = Team::find($id);
        $team->name = $request->name;
        $team->country = $request->country;
        $team->matchs_won = $request->matchs_won;
        $team->matchs_lose = $request->matchs_lose;
        $team->matchs_null = $request->matchs_null;
        $team->save();
        $teams = Team::all();
        return view('admin/team', compact('teams'));
    }
}
