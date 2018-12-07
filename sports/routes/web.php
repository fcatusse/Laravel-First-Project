<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teams', 'TeamController@index')->name('teams');

Route::group(['prefix' => 'admin'], function () {
	Route::get('teams', 'TeamController@admin');
	Route::get('teams/delete/{id}', 'TeamController@delete');

	Route::post('teams/add/', 'TeamController@add');
	Route::get('teams/add/', 'TeamController@addForm');

	Route::post('teams/edit/{id}', 'TeamController@edit');
	Route::get('teams/edit/{id}', 'TeamController@editForm');
});
// ---------------- Routes for matches ----------------------//
Route::get('/match', 'MatchController@index')->name('match');

Route::get('/match/create', 'MatchController@create');

Route::get('/match/{match}', 'MatchController@show');

Route::post('/match', 'MatchController@store');

//----------------- Routes for players ---------------------//

Route::get('/player', 'PlayerController@index')->name('player');

Route::get('/player/create', 'PlayerController@create');

Route::get('/player/{player}', 'PlayerController@show');

Route::post('/player', 'PlayerController@store');

Route::delete('player/destroy/{player}', 'PlayerController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teams', 'TeamController@index')->name('teams');
//->middleware('auth');
