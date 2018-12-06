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

Route::get('/match', 'MatchController@index')->name('match');

Route::get('/match/create', 'MatchController@create');

Route::get('/match/{match}', 'MatchController@show');

//->middleware('auth');

Route::post('/match', 'MatchController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teams', 'TeamController@index')->name('teams');