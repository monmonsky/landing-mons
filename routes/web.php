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
    return view('landing');
});


Route::get('/cat', function () {
    return view('cat');
});


Route::get('/cat-frame', function () {
    return view('cat-frame');
});


Route::get('/lamp', function () {
    return view('lamp');
});
