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

//routes de l'index
Route::get('/galeries', 'GalerieController@index')->name('galeries.index');
Route::get('/galeries/show/{id}', 'GalerieController@index')->name('galeries.show');
Route::get('/galeries/more', 'GalerieController@more')->name('galeries.more');
//Route::get('galeries/create', 'GalerieController@create')->middleware('auth')->name('galeries.create');
//routes de home
Route::get('home/create', 'HomeController@create')->middleware('auth')->name('home.create');
Route::post('home/create', 'HomeController@store')->name('home.store');
Route::get('home/{id}/edit', 'HomeController@edit')->middleware('auth')->name('home.edit');
Route::put('home/{id}', 'HomeController@update')->name('home.update');
Route::delete('home/{id}', 'HomeController@destroy')->name('home.destroy');
Route::post('/galeries', 'GaleriesController@store')->name('galeries.store');
Route::get('home/user', 'HomeController@msg')->middleware('auth')->name('home.msg');

//Enlève la route pour enregistrer un admin et accédé au home
Auth::routes(["register"=>False]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
