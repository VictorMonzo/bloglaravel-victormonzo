<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () { return view('inici'); })->name('inici');

/* Crear las dos rutas temporles */
Route::get('/movies/nuevoPrueba', PostController::class . '@nuevoPrueba')->name('post.nuevoPrueba');
Route::get('/movies/editarPrueba/{id}', PostController::class . '@editarPrueba')->name('post.editarPrueba');
