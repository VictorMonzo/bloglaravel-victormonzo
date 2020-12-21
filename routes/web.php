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

/*
    Rutas Controller
*/
Route::resource('post', PostController::class);


//Route::resource('login', LoginController::class);

Route::get('/', function () { return view('inici'); })->name('inici');

/* Crear las dos rutas temporles */ /*
Route::get('/movies/nuevoPrueba', PostController::class . '@nuevoPrueba')->name('post.nuevoPrueba')->middleware('auth');
Route::get('/movies/editarPrueba/{id}', PostController::class . '@editarPrueba')->name('post.editarPrueba')->middleware('auth');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('salir');
