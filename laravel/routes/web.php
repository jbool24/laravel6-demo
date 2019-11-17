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
use App\Services\ChuckNorisAPI;
use App\Events\UserJoked;

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/joke', function (ChuckNorisAPI $chuck) {
    // $joke = $chuck->getRandom();
    $joke = "hey heloo";
    event(new UserJoked($joke));
    return ["joke" => $joke];
});
