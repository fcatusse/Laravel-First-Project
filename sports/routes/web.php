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

// Team route

Route::get('/team', 'TeamController@index')->name('teams');
Route::get('/team/stats/{id}', 'TeamController@stats');

Route::group(['prefix' => 'admin'], function () {
	Route::get('team', 'TeamController@index');
	Route::get('team/create/', 'TeamController@create');
	Route::post('team/create/', 'TeamController@store');
	Route::get('team/show/{id}', 'TeamController@show');
	Route::get('team/edit/{id}', 'TeamController@edit');
	Route::post('team/edit/{id}', 'TeamController@update');
	Route::get('team/destroy/{id}', 'TeamController@destroy');
});

Route::get('/match', 'MatchController@index')->name('match');

Route::get('/match/create', 'MatchController@create');

Route::get('/match/{match}', 'MatchController@show');

Route::post('/match', 'MatchController@store');

Route::get('/match', 'MatchController@index')->name('match');

Route::get('/match/create', 'MatchController@create');

Route::get('/match/{match}', 'MatchController@show');

Route::post('/match', 'MatchController@store');
Route::get('/home', 'HomeController@index')->name('home');
//->middleware('auth');
