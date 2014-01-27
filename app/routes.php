<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'HomeController@showWelcome');
Route::get('/', function () {
    return View::make('body');
});
Route::get('contact', function () {
    return View::make('contact');
});
Route::get('user', function () {
    $user = User::all();
    return View::make('body')->with('user', $user);
});