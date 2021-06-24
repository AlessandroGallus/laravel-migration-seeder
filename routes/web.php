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

Route::get('/', 'VacanzeController@index');
Route::get('/case', function () {
    return view('partials/case');
});
Route::get('/regioni', function () {
    return view('partials/regioni');
});
Route::get('/stati', function () {
    return view('partials/stati');
});


