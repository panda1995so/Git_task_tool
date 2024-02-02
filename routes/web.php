<?php

use Illuminate\Support\Facades\Route;
Route::resource('managed', 'App\Http\Controllers\Managed');
Route::resource('project', 'App\Http\Controllers\ProjectController');
Route::get('nazotoki', 'App\Http\Controllers\nazotokitest@index');
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
    return view('home');
});
