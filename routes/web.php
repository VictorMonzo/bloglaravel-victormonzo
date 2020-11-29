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

Route::get('/', function () { return view('inici'); })->name('inici');

Route::get('/blog/posts', function() { return view('posts/llistat'); })->name('posts_llistat');

Route::get('posts/{id?}', function($id) { return view('posts/fitxa', compact('id')); })->where('id', "[0-9]+")->name('posts_fitxa');
