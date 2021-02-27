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

// Route::get('/', 'PostController@index')->name('posts.index');
Route::resource('posts', 'PostController');

Route::get('blog/{slug}', 'BlogController@show');  //1) metto show solo per uniformità 2) il primo parametro della funzione get è l'url al quale la mia pagine verrà visualizzata 