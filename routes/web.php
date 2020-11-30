<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CampusController;

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

// Colleges
Route::get('/colleges', 'App\Http\Controllers\CollegesController@index');
Route::get('/colleges/create', 'App\Http\Controllers\CollegesController@create');
Route::get('/colleges/{college}', 'App\Http\Controllers\CollegesController@show');
Route::post('/colleges', 'App\Http\Controllers\CollegesController@store');
Route::delete('/colleges/{college}', 'App\Http\Controllers\CollegesController@destroy');
Route::get('/colleges/{college}/edit', 'App\Http\Controllers\CollegesController@edit');
Route::put('/colleges/{college}', 'App\Http\Controllers\CollegesController@update');

// Compare
Route::get('/compare', 'App\Http\Controllers\ComparesController@index');
Route::get('/compare/result', 'App\Http\Controllers\ComparesController@show');
Route::resource('compare', 'App\Http\Controllers\ComparesController');

// Route::get('find-nama_kampus', ['uses'=>'ComparesController@store', 'as'=>'find.nama_kampus']);

