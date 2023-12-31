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
    return view('dashboard');
});

Route::get('/', 'App\Http\Controllers\WebsiteController@index');

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/cerita-kami', function () {
    return view('cerita-kami');
});

