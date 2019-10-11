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

Route::get('/hello', 'HelloController@index');
Route::resource('/game', 'GameController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('show-my-games', 'UserController@showMyGames')->name('game.show-my-games');
Route::get('delete-my-game', 'UserController@deleteMyGame')->name('game.delete-my-game');
Route::get('game/add-user-game/{game}', 'GameController@addUserGame')->name('game.add-user-game');
