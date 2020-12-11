<?php

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
    return view('welcome');
});

Route::resource('houses', \App\Http\Controllers\HouseController::class)
    ->only(['create', 'store']);

Route::get('cities', [\App\Http\Controllers\CityController::class, 'index'])
    ->name('cities.index');

Route::get('states', [\App\Http\Controllers\StateController::class, 'index'])
    ->name('states.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
