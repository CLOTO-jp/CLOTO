<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// トークンの再発行
Route::get('/regenerate-token', function (Request $request) {
    $request->session()->regenerateToken();
    return response()->json();
})->name('regenerateToken');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/auth/user', fn () => Auth::user())->name('authUser');
Route::get('/user/{username}', 'API\UserController@show')->name('userShow');
Route::post('/user/update', 'API\UserController@update')->name('profileUpdate');
