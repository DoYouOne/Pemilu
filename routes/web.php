<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login_process','AuthController@post_login')->name('login_process');
Route::get('/logout', 'AuthController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','CheckRole:0']], function(){
    Route::get('/dashboard', 'Admin\DashboardController@index');
});

Route::group(['middleware' => ['auth','CheckRole:1,2']], function(){
    Route::get('/home', 'User\DashboardController@index');
    Route::get('/vote', 'Vote\VoteController@index');
});
