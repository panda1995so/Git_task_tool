<?php

use Illuminate\Support\Facades\Route;
Route::resource('managed', 'App\Http\Controllers\Managed')->middleware('auth');
Route::resource('project', 'App\Http\Controllers\ProjectController')->middleware('auth');
Route::get('nazotoki', 'App\Http\Controllers\nazotokitest@index');
Route::get('rally_suudoku', 'App\Http\Controllers\nazotokitest@index')->middleware('auth');
Route::get('rally_crosswords', 'App\Http\Controllers\nazotokitest@index')->middleware('auth');
Route::get('rally_slitherlink', 'App\Http\Controllers\nazotokitest@index')->middleware('auth');
Route::get('rally_seekwords', 'App\Http\Controllers\nazotokitest@index')->middleware('auth');
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
