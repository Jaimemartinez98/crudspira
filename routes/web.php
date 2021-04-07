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

Route::post('/agregar', 'App\Http\Controllers\PersonasController@store')->name('store'); 
Route::get('/listpersonas', 'App\Http\Controllers\PersonasController@leer')->name('leer'); 

Route::get('/editar/{id}', 'App\Http\Controllers\PersonasController@edit1')->name('editar1');
Route::put('/updateacudiente/{id}','App\Http\Controllers\PersonasController@updatepersonas')->name('update2');