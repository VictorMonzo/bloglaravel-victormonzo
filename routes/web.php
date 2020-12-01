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

Route::get('/', function () { return view('inici'); })->name('inici');

Route::get('/blog/posts', function() { return view('posts/llistat'); })->name('posts-index');

Route::get('posts/{id?}', function($id) { return view('posts/fitxa', compact('id')); })->where('id', "[0-9]+")->name('posts-show');


/*
    Rutas Controller
*/
Route::resource('post', PostController::class)->only(['index', 'show', 'create', 'edit']);
