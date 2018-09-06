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

use App\Http\Middleware\AddUserMiddleware;
use App\Http\Middleware\TimeTableMiddleware;

Route::get('/', 'MasterController@TopPage');
Route::get('/home', 'MasterController@Home')->middleware('auth');
Route::get('/schedule', 'MasterController@Schedule')->middleware('auth');
Route::post('/schedule', 'MasterController@UpdateTable')->middleware(AddUserMiddleware::class);
Route::get('/generate', 'MasterController@Generate')->middleware('auth');
Route::post('/generate', 'MasterController@TimeTable')->middleware(TimeTableMiddleware::class);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
