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
use App\User;
use App\Services\ChuckNorisAPI;
use App\Events\UserJoked;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/joke/send', function (Request $req) {
    $user_id = app('request')->query()['id'];
    $joke =app('request')->query()['joke'];

    $user = User::where('id', $user_id)->first();

    if (isset($user_id) && isset($joke)) {
      event(new UserJoked($user, $joke));
    }
    return;
});
