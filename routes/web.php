<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addcurso', [App\Http\Controllers\HomeController::class, 'index2'])->name('addcurso');
Route::get('/addcursoaestudiantes', [App\Http\Controllers\HomeController::class, 'index3'])->name('addcursoestu');


Route::post('/agregar', 'App\Http\Controllers\PersonasController@store')->name('store'); 
Route::post('/agregar2', 'App\Http\Controllers\PersonasController@store2')->name('store2');
Route::post('/agregar3', 'App\Http\Controllers\PersonasController@store3')->name('store3');

Route::get('/listpersonas', 'App\Http\Controllers\PersonasController@leer')->name('leer'); 
Route::get('/listcursos', 'App\Http\Controllers\PersonasController@leer2')->name('leer2'); 
Route::get('/listcursosestudiantes', 'App\Http\Controllers\PersonasController@leer3')->name('leer3'); 

Route::get('/editar/{id}', 'App\Http\Controllers\PersonasController@edit1')->name('editar1');
Route::get('/editar2/{id}', 'App\Http\Controllers\PersonasController@edit2')->name('editar2');

Route::put('/updateacudiente/{id}','App\Http\Controllers\PersonasController@updatepersonas')->name('update2');
Route::put('/updatecursos/{id}','App\Http\Controllers\PersonasController@updatecursos')->name('update3');